<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/header2');
        $this->load->view('news/index');
        $this->load->view('templates/footer');
    }

    public function berita()
    {
      
        $kategory = $_GET;
        
        $data = implode($kategory);
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "https://newsapi.org/v2/top-headlines?country=id&category=".$data."&apiKey=4a7de7ee29ca458e8ff074f2e0c217d2");

        // https://newsapi.org/v2/everything?q=mudik&from=2021-05-7&sortBy=indonesia&apiKey=4a7de7ee29ca458e8ff074f2e0c217d2


        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        $hasil['news'] = json_decode($output, true);

        $this->load->view('templates/header2');
        $this->load->view('news/cardberita', $hasil);
        $this->load->view('templates/footer');

        // close curl resource to free up system resources
        curl_close($ch);    
    }

    public function baca()
    {
        $data['berita'] = $_POST;

        $this->load->view('templates/header2');
        $this->load->view('news/baca',$data);
        $this->load->view('templates/footer');
    }

}