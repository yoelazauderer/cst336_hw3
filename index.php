<!DOCTYPE html>
<html>
    
    <head>
        <title> myname.com </title>
        <link href="styles.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js" ></script> 
        <script src="jsfile.js"></script>
    </head>
    
    <body>
        <img id="logo" src="img/my-name-logo.png"/>
        <form id="searchBar">
            <input id="search" type="text" name="search" placeholder="Search for a name here">
            <button id="btn" type="submit">&#128269;</button>
        </form>
        
        <span id="nameError"></span><br><br>
        
        <div id="content">
            
            <br>
            
            <div id="nameInfo">
            Name:      <span id="name1"></span><br><br>
            Gender:    <span id="gender"></span><br><br>
            Usage:     <span id="usage"></span><br><br>
            </div>
            
            <div id="notFound">
                NAME NOT FOUND<br><br>
            </div>
        
        </div>
        
        <script>
           
            $(document).ready(function() {
                $("#nameInfo").css("display", "none");
                $("#notFound").css("display", "none");
            });
           
            $("#searchBar").on("submit", async function(e){
                //alert("working");
                e.preventDefault();
                $("#nameInfo").css("display", "none");
                $("#notFound").css("display", "none");
                $("#nameError").css("display", "none");
                $("#usage").html("");
                let key = `yo636418582`;
                let enteredName = $("#search").val();
                console.log(enteredName);
                let url = `https://www.behindthename.com/api/lookup.json?name=${enteredName}&key=${key}`;
                let response = await fetch(url);
                let data = await response.json();
                //console.log(data);
                    if (!isValidName()){
                        $("#nameError").css("display", "block");
                        $("#nameError").html("Please enter a valid name");
                   
                    } else if (data.error_code == 50) {
                        $("#notFound").css("display", "block");
                    } else {
                        $("#nameInfo").css("display", "block");
                        $("#name1").html(data[0].name);
                        if (data[0].gender == 'm') {
                            $("#gender").html("Male &#128104");
                        } else if (data[0].gender == 'f'){
                            $("#gender").html("Female &#128105");
                        } else if (data[0].gender == 'mf') {
                            $("#gender").html("Male &#128104 / Female &#128105");
                        } else {
                            $("#gender").html("Female &#128105 / Male &#128104");
                        }
                        for (i=0; i < data[0].usages.length; i++)
                        {
                            $("#usage").append("<br />" + data[0].usages[i].usage_full + " " + "(" + data[0].usages[i].usage_gender + ")");
                        }
                    } 
            });
            
             function isValidName(){
                let isValidName = true;
                let name = $("#search").val();
                var matches = name.match(/\d+/g);
                if ((matches != null) || (name.length == 0)) {
                    isValidName = false;
                }
            return isValidName;
        }
        </script>
        
        <footer>
            <hr>
            
            <div id="footersection">
            
            <div>
            CST336 Internet Programming. 2020&copy; Zauderer
            <br/>
            <strong>Disclaimer:</strong> The information in this webpage is fictitious.
            <br/>
            It is used for academic purposes only.
            </div>
            
            </div>
        </footer>
    
    </body>
    
</html>

