<?php
namespace Lm\GearmanBundle\Service;

/**
* Interface client gearman
*
* @author Charbuillet
*/


class LmGearman
{

	protected $gearman_host;

	protected $gearman_port;

	public function __construct( $gearman_host, $gearman_port)
	{
		$this->gearman_host = (string) $gearman_host;
		$this->gearman_port = (int) $gearman_port;
	}

	public function doJob($functionName,$data)
	{

		$client = new \GearmanClient();
		$client->addServer($this->gearman_host,$this->gearman_port);
		$result = $client->doNormal($functionName, $data);
		return $result;
		

	}
//  return 0 if ok, -1 if error
	public function doBackgroundJob($functionName,$data) 
	{

		$client = new \GearmanClient();
		$client->addServer($this->gearman_host,$this->gearman_port);
		$result = $client->doBackground($functionName, $data);
		return ($client->returnCode() == GEARMAN_SUCCESS -1);
		
	}



}
