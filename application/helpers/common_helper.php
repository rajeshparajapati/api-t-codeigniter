<?php

function p(){
	$args = func_get_args();
	foreach ($args as $arg){
		echo "<pre>";
		print_r($arg);
		echo "</pre>";
	}
	die;
}

function ck($str=null,$for_str=null,$val='active'){
		if($str==$for_str) return $val;
		else return false;
}

function upload_files($path='', $files, $type='jpg|jpeg|png|pdf|csv', $title1=true ){
	$CI =& get_instance();
	$CI->load->library('upload');
	$config = array( 'upload_path'=>'./assets/'.$path,'allowed_types'=>$type,'overwrite'=>TRUE);
	$fileRef = $files;
	$files = $_FILES[$files];
	
	$file_info = null;

	if( is_array($files['name']) ){
		$file_info = array();
		$count = count($files['name']);
		for ($i=0; $i<$count ; $i++) { 
			$_FILES['tempFile']['name']		= $files['name'][$i];
			$_FILES['tempFile']['type']		= $files['type'][$i];
			$_FILES['tempFile']['tmp_name']	= $files['tmp_name'][$i];
			$_FILES['tempFile']['error']	= $files['error'][$i];
			$_FILES['tempFile']['size']		= $files['size'][$i];
			if( $title1 == false ) $title = $_FILES['tempFile']['name'];
			else { $title = time().rand(100,999).'_'.$files['name'][$i]; }
			$config['file_name'] = $title;

			$CI->upload->initialize($config);
			if(!$CI->upload->do_upload('tempFile')) $upload_error[] = $CI->upload->display_errors();
			else $file_info[] = $CI->upload->data();
		}
	}else{
		if( $title1 == false ) $title = $files['name'];
		else { $title = time().rand(100,999).'_'.$files['name']; }

		$config['file_name'] = $title;
		$CI->upload->initialize($config);
		if(!$CI->upload->do_upload($fileRef)) $upload_error = $CI->upload->display_errors();
		else $file_info = $CI->upload->data();
	}
	return $file_info;
}


function request($url, $http_method = NULL, $data = array()) {
	
// api base url	hardcoded
		$base_url = "http://localhost/inovantsolutions/webservices/".$url;

//start curl
        $req = curl_init($base_url);
//set request headers
        curl_setopt($req, CURLOPT_HTTPHEADER, array(     
            'Content-Type: application/json',
        ));

//curl options        
        curl_setopt($req, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($req, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($req, CURLOPT_TIMEOUT, 30);


// setting method for get and post
        if (is_null($http_method)) {
            if (is_null($data)) {
                $http_method = 'GET';
            } else {
                $http_method = 'POST';
            }
        }
//set http method in curl
        curl_setopt($req, CURLOPT_CUSTOMREQUEST, $http_method);


        if (!is_null($data)) {
            if (is_array($data)) {
                $raw = http_build_query($data);
            } else {

                $raw = $data;
            }
            curl_setopt($req, CURLOPT_POSTFIELDS, $raw);
        }

//execute curl request
        $raw = curl_exec($req);
        if (false === $raw) { 
            throw new Exception(curl_error($req) . $url, -curl_errno($req));
        }

//decode the result
        $res = (array) json_decode($raw);
        return $res;
    }



function send_response($status, $data, $message){
		$data_obj = (empty($data)) ? array() : $data;
		$response['status'] = $status;
		$response['data'] = $data_obj;
		$response['message'] = $message;
		header('Content-Type: application/json');
		echo json_encode($response);
		exit;
}