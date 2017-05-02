#OpenVZ Script

- create_container.sh %containerName% (Optional)%templateName%
	Basic container creatation script. 
	Deploy from standard centos 6 x86_64 template.
	Change Network from default venet to veth 

- make_template.sh %containerName% %newTemplateName%
	Make a new template from container

--Others:
To Delete Container:
	prlctl stop %containerName%
	prlctl destroy %containerName%

To Start Container:
	prlctl start %containerName%

To Enter into Container's Console:
	prlctl enter %containerName%


OpenVZ UserGuide : https://docs.openvz.org/openvz_users_guide.pdf