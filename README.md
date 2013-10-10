===============
LmGearmanBundle
===============

This library provides a service for implementing a Gearman client:
http://github.com/FriendsOfSymfony/FOSRest

INSTALLATION:

- Prerequisit:<br>
Install the php gearman extension (http://gearman.org/gearman_php_extension)


- in AppKernel<br>
	new Lm\GearmanBundle\LmGearmanBundle(),

- in parameters.yml <br>
gearman_host: {ip address of the gearman server}<br>
gearman_port: {port of the gearman server}

- in composer.json <br>
require "lm/gearmanbundle": "dev-master"


USAGE:

In a controller<br>
$gearman = $this->get('gearman');<br>
$reponse=$gearman->doJob(functionName, data);<br>

