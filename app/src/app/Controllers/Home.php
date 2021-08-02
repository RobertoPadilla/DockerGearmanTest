<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function gearmanAction()
	{
		$data['value'] = $this->request->getPost("contractNumber");

		$count = 1;

		$client = new \GearmanClient();
		$client->addServer();

		while($data['value'] >= $count)
		{
			print "$count - " . $client->doNormal("reverse", "Hello World!") . "<br>";
			$count++;
		}
	}
}
