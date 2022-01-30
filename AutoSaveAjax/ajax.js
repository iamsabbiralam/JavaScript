function getData(){


  var fd = new FormData();


  var title = document.getElementsByName('title')[0].value;


  var content = document.getElementsByName('content')[0].value;


  var id = document.getElementsByName('id')[0].value;


  fd.append('title',title);


  fd.append('content',content);


  fd.append('id',id);


  return fd;


}



function savePost(){


  try{


    var xhttp = new XMLHttpRequest();


  }


  catch(e){


    console.log(e);


  }


  var data = getData();


  xhttp.open('POST','autosave.php?save=true');


  xhttp.send(data);


  xhttp.onreadystatechange = function(){


    if(this.status == 200 && this.readyState == 4){


      if(data.get('id') == ""){


        document.getElementsByName('id')[0].value = this.responseText;


      }


      else{


        document.getElementById('message').innerHTML = this.responseText;


      }


      console.log(this.responseText);


    }


  }


}



setInterval(savePost,10000); //savePost will be called in every 10 seconds