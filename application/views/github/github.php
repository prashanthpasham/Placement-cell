<?php

include 'header.php'; 
?>
 


<?php
include 'githubConf.php';
include 'functions.php';
if(isset($_GET['code']))

{
    $fields = array( 'client_id'=>clientID, 'client_secret'=>clientSecret, 'code'=>$_GET['code']);
    $postvars = '';
    foreach($fields as $key=>$value) {
        $postvars .= $key . "=" . $value . "&";
    }
    
    $data = array('url' => 'https://github.com/login/oauth/access_token',
                  'data' => $postvars,
                  'header' => array("Content-Type: application/x-www-form-urlencoded","Accept: application/json"),
                  'method' => 'POST');
    
     

    
    $gitResponce = json_decode(curlRequest($data));
    
    if($gitResponce->access_token)
    {
        $data = array('url' => 'https://api.github.com/user?access_token='.$gitResponce->access_token,
                      'header' => array("Content-Type: application/x-www-form-urlencoded","User-Agent: ".appName,"Accept: application/json"),
                      'method' => 'GET');
   
        
        $gitUser = json_decode(curlRequest($data));
// We generate the url for curl
  $data = array('url' => 'https://api.github.com/users/' . $gitUser->login. '/repos',
                  'header' => array("Content-Type: application/x-www-form-urlencoded","User-Agent: ".appName,"Accept: application/json"),
                      'method' => 'GET');

     $repo= json_decode(curlRequest($data)); 

          echo'<div class="content-wrapper" style="margin-top:5px">

<div class="row">
          <div class="col-md-12">
               <div class="col-md-2"></div>
                 <div class="col-md-8" style="margin-top:20px">
               <div class="box box-success">
  
              <div class="panel-heading">
                       <a href="'.$gitUser->html_url.'" class="thumbnail" style="width:150px;height:150px">
            <img src="'.$gitUser->avatar_url.'" alt="image" style="float:left"><h2>'.$gitUser->login.'</h2>
            </a>
                     </div>

 
                <table class="table">
               
            <tr>
                <td><span class="glyphicon glyphicon-user">Name:</span></td>
                <td>'.$gitUser->login.'</td>
            </tr>
            <tr>
                <td><span class="glyphicon glyphicon-envelope">Email:</span></td>
                <td>'.$gitUser->email.'</td>
            </tr>
            <tr>
                <td><span class="glyphicon glyphicon-map-marker">Location:</span></td>
                <td>'.$gitUser->location.'</td>
            </tr>
            <tr>
                <td><span class="glyphicon glyphicon-calendar">PublicRepos:</span></td>
               <td>'.$gitUser->public_repos.'</td>
             
            </tr> 
            <tr><td><span class="glyphicon glyphicon-calendar">Resposlink:</span></td>
            
            <td><a href="http://www.github.com/'.$gitUser->login.'">Respositories</td></tr>
                
                   </table>
                    </div>
                </div>
               </div>
               </div>
               </div>
               </div>
               </div>';
    /*         
                  
   foreach($repo AS $repos) 

   {
    echo'
      <div class="content-wrapper" >
        <div class="row">
          <div class="col-md-12">
         <div class="col-md-2"></div>
                          
           <div class="col-md-8" style="margin-left:10px">
              <div class="thumbnail">
          <table class="table-bordered">
           <tr><td><h4>RepositoryName</h4></td>
            <td><h4>Description</h4></td>
            <td><h4>Language</h4></td>
             <td><h4>Watchers</h4></td>
             <td><h4>Forks</h4></td>  </tr>
              <tr><td>'.$repos->name.'</td>
             <td>'.$repos->description.'</td>
               <td>'.$repos->language.'</td>
                     
              <td>'.$repos->watchers.'</td>
           <td>'.$repos->forks.'</td></tr>
          </table><br></div>
            </div> 
               </div>
               </div>';    
          }     
               
        */
       
        

  

    }
    else
    {
        echo "Some error occured try again";
    }
}
else
{
    echo '<div class="content-wrapper" style="margin-top:5px">
    <div class="row">
          <div class="col-md-12">
          <div class="col-md-5"></div>
          <div class="col-md-3" style="margin-top:100px">
         <div class="well">
<a href="https://github.com/login/oauth/authorize?scope=user:email&client_id='.clientID.'" title="Login with Github" target="_self">
    <img src="http://gnies.org/images/login-with-Github.png" />
    </a>
 </div>
    </div></div></div>
    </div>';
}



?>
<?php
include 'footer.php'; ?>