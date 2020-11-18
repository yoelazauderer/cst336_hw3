<!DOCTYPE html>
<html>
    
    <head>
        <title> myname.com </title>
        <link href="styles.css" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js" ></script> 
        <script src="jsfile.js"></script>
    </head>
    
    <body>
        <header>
            <img id="logo" src="img/my-name-logo.png">
            <form id="nav">
                <input id="search" type=text name="search" placeholder="Search for a name">
                <button id="btn" type="submit">&#128269;</button>
            </form>
            <br>
            <hr>
        </header>
        
        <div id="content">
            <br>
            
            <div id="nameInfo">
            Name:      <span id="name"></span><br><br>
            Gender:    <span id="gender"></span><br><br>
            Usage:     <span id="usage"></span><br><br>
            Source:    <span id="source"></span><br><br>
            </div>
            
            <div id="notFound">
                NAME NOT FOUND
            </div>
        
        </div>
        
        <footer>
                <br><br>
                <br>
                <div>
                    CST336 Internet Programming. 2020&copy; Zauderer
                    <br>
                    <strong>Disclaimer:</strong> The information in this webpage is fictitious.
                    <br>
                    It is used for academic purposes only.
                    <br><br>
                </div>
        </footer>
   
    </body>
</html>