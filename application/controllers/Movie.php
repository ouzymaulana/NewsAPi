<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movie extends CI_Controller {
    
    public function index()
    {
        $this->load->view('templates/header');
    }
     
    public function cari()
    {  
    //    if(empty($_GET['s'])){
    //        redirect($this->load->view('templates/header'));
    //    }

    //    if($_GET['s'] == null){
    //     redirect($this->load->view('templates/header'));
    //    }

        $s = $_GET['s'];

        $_SESSION['card'] = $s;

        // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "http://www.omdbapi.com/?apikey=ebb12354&s=".$_SESSION['card']);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // var_dump($output);
        // echo"<br>";
        // exit;
        // if($output[0] === False) {
        //     echo"false";
        //  }else{
        //      echo"true";
        //  }
 
        //  exit;
        $hasil['list_movie'] = json_decode($output, true);

        if($hasil['list_movie']["Response"] === "False"){

           redirect($this->load->view('templates/header'));

        }

        $this->load->view('templates/header');
        $this->load->view('movie/searching', $hasil);


        // close curl resource to free up system resources
        curl_close($ch);     
        
    }



    public function detail($id)
    {
        // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "http://www.omdbapi.com/?apikey=ebb12354&i=".$id);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        $hasil['list_movie'] = json_decode($output, true);

        $this->load->view('movie/detail', $hasil);

        // close curl resource to free up system resources
        curl_close($ch);     
        
    }
       
}