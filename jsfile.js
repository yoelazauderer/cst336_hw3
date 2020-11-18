// JavaScript File
        
        /* global $ */
        /* global fetch */
        
        $(document).ready(function() {
                $("#nameInfo").css("display", "none");
                $("#notFound").css("display", "none");
                //alert("works");
        });
        
        $("#btn").on("submit", async function(e){
            
            e.preventDefault();
            let key = 'yo636418582';
            let name = $("#search").val();
            console.log(name);
            let url = `https://www.behindthename.com/api/lookup.json?name=${name}&key=${key}`;
            alert("ok");
            let response = await fetch(url);
            let data = await response.json();
            
            console.log(data);
                if (data == false) {
                     $("#notFound").css("display", "block");
                } else {
                    $("#nameInfo").css("display", "block");
                    $("#name").html(data.name);
                    $("#gender").html(data.gender);
                    // $("#usage").html(data.usages[0].usage_full);
                    // $("#source").html(data.usages[1].usage_full);
                }
        });
        
        // function isValidName(){
        //     let isValidName = true;
        //     let name = $("#search").val();
        //     let char [] nameChar = name.toCharArray();
        //     for (let i=0; i < name.length; i++) {
                
        //     }
        //     if () {
                
        //     } else {
        //         $("#error").html("Please enter valid name.")
        //         isValidName = false;
        //     }
        //     return isValidName;
        // }