<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index() {
        $header['pageTitle'] = "SCB Remote Labs";
        echo view('ViewTemplates/_header', $header);
        echo view('ViewTemplates/_navigation');
        echo view('Home/remoteLabs');
        echo view('ViewTemplates/_footer');
	}

    public function remoteLabs() {
        $header['pageTitle'] = "SCB Remote Labs";
        echo view('ViewTemplates/_header', $header);
        echo view('ViewTemplates/_navigation');
        echo view('Home/remoteLabs');
        echo view('ViewTemplates/_footer');
    }

    public function software()
    {
        $header['pageTitle'] = "SCB Software";
        echo view('ViewTemplates/_header', $header);
        echo view('ViewTemplates/_navigation');
        echo view('Home/software');
        echo view('ViewTemplates/_footer');
    }

    public function labSoftware() {
        $header['pageTitle'] = "SCB Lab Software";
        echo view('ViewTemplates/_header', $header);
        echo view('ViewTemplates/_navigation');
        echo view('Home/labSoftware');
        echo view('ViewTemplates/_footer');
    }

    public function files() {
        $header['pageTitle'] = "SCB Lab Files &amp; Printing";
        echo view('ViewTemplates/_header', $header);
        echo view('ViewTemplates/_navigation');
        echo view('Home/files');
        echo view('ViewTemplates/_footer');
    }

    public function support() {
        $header['pageTitle'] = "SCB Support";
        echo view('ViewTemplates/_header', $header);
        echo view('ViewTemplates/_navigation');
        echo view('Home/support');
        echo view('ViewTemplates/_footer');
    }

    public function laptops() {
        $header['pageTitle'] = "SCB Laptops";
        echo view('ViewTemplates/_header', $header);
        echo view('ViewTemplates/_navigation');
        echo view('Home/laptops');
        echo view('ViewTemplates/_footer');
    }

    public function bloomberg() {
        $header['pageTitle'] = "Bloomberg Terminals";
        echo view('ViewTemplates/_header', $header);
        echo view('ViewTemplates/_navigation');
        echo view('Home/labBloomberg');
        echo view('ViewTemplates/_footer');
    }

    public function createBloombergAccount() {
        $header['pageTitle'] = "Bloomberg Terminals";
        echo view('ViewTemplates/_header', $header);
        echo view('ViewTemplates/_navigation');
        echo view('Home/createBloombergAccount');
        echo view('ViewTemplates/_footer');
    }

    public function bloombergBMC() {
        $header['pageTitle'] = "Bloomberg Market Concepts";
        echo view('ViewTemplates/_header', $header);
        echo view('ViewTemplates/_navigation');
        echo view('Home/bloombergBMC');
        echo view('ViewTemplates/_footer');
    }
    public function ninjaTrader() {
        $header['pageTitle'] = "Ninja Trader";
        echo view('ViewTemplates/_header', $header);
        echo view('ViewTemplates/_navigation');
        echo view('/Home/ninjaTrader');
        echo view('ViewTemplates/_footer');
    }
    public function sas() {
        $header['pageTitle'] = "SAS";
        echo view('ViewTemplates/_header', $header);
        echo view('ViewTemplates/_navigation');
        echo view('/Home/sas');
        echo view('ViewTemplates/_footer');
    }
    public function microsoft() {
        $header['pageTitle'] = "Azure";
        echo view('ViewTemplates/_header', $header);
        echo view('ViewTemplates/_navigation');
        echo view('/Home/microsoft');
        echo view('ViewTemplates/_footer');
    }
    public function projectplan365() {
        $header['pageTitle'] = "Project Plan 365";
        echo view('ViewTemplates/_header', $header);
        echo view('ViewTemplates/_navigation');
        echo view('/Home/projectplan365');
        echo view('ViewTemplates/_footer');
    }
    public function thinkCell() {
        $header['pageTitle'] = "Think-Cell";
        echo view('ViewTemplates/_header', $header);
        echo view('ViewTemplates/_navigation');
        echo view('/Home/thinkCell');
        echo view('ViewTemplates/_footer');
    }
    public function vmware() {
        $header['pageTitle'] = "VMware";
        echo view('ViewTemplates/_header', $header);
        echo view('ViewTemplates/_navigation');
        echo view('/Home/vmware');
        echo view('ViewTemplates/_footer');
    }
}
