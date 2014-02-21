# Monitoring  client program
import conf,json,threading
import socket,time,sys
import scripts
import commands
HOST = '192.168.2.252'    # The remote host
PORT = 9999              # The same port as used by the server

status_dic = {'services': {}}
last_check_dic = {}
interval_dic = {}

conf.BASE_DIR

#get all the services' monitor inverval and put it into interval_dic
for k,v in conf.enabled_services.items():
	if k == 'services':
		for i in v:
			service_name,service = i[0],i[1]
			if interval_dic.has_key( service.check_interval):
				interval_dic[ service.check_interval ]['name'][service_name] = service
			else:
			
				interval_dic[ service.check_interval ] = { 'name' :  { service_name : service },
									   'last_check': 0 }
			

print interval_dic

def multi_job(m_list, m_interval):
	status_dic = {}
	#run single thread...
	def run(name,m_api):
		print 'going to run ...',name
		status_dic[name] = m_api.script.monitor()
		interval_dic[m_interval]['last_check'] = time.time()
		print interval_dic[m_interval]
	result = [] 
	for name, t in m_list.items():
		result.append(threading.Thread(target=run, args=(name,t)).start())
	
	# get result
	while True:
		if len(status_dic) == len(m_list): #all threads are finished.
			return status_dic
			break
		else: 
			time.sleep(1)


def monitor_api(m_dic, m_interval):
	#s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
	#s.connect((HOST, PORT))
	status_dic = multi_job(m_dic['name'], m_interval)
	print '\033[34;1m %s \033[0m' % status_dic
	#s.sendall(json.dumps(status_dic))
	#data = s.recv(1024)
	#s.close()
	#print 'Received', repr(data)
	#print "will connecto to server 30 secs later.."

while True:
	for interval,monitor_dic in interval_dic.items():
		time_diff = time.time() - monitor_dic['last_check']  
		if time_diff >= interval:
			#print time_diff,'going to monitor %s ' % monitor_dic['name']
			monitor_api(monitor_dic, interval)
			#monitor_dic['last_check'] = time.time()
		else:
			print 'not hit the inteval time yet.' ,time_diff,monitor_dic
	#monitor_api()
	time.sleep(5)
