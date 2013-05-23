===============
LmGearmanBundle
===============

This library provides a service for implementing a Gearman client:
http://github.com/FriendsOfSymfony/FOSRest

INSTALLATION:

- Prerequisit:
Install the php gearman extension (http://gearman.org/gearman_php_extension)


- in AppKernel
	new Lm\GearmanBundle\LmGearmanBundle(),

- in parameters.yml
gearman_host: {ip address of the gearman server}
gearman_port: {port of the gearman server}


USAGE:

In a controller
$gearman = $this->get('gearman');
$reponse=$gearman->doJob(functionName, data);

