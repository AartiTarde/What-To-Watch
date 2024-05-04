
<html>
    <head>
        <title>Review</title>
        <link rel="stylesheet" type="text/css" href="pop1.css">
    </head>
    <body>
        
        
        <div class="container">
            <div id="id1">
                <form method="POST" action="">
                    <h3>REVIEW</h3>
                    <table>
                        <tr>
                            <td>
                                <input type="text" placeholder="Enter Email Here...."  id="email" name="email">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Enter Your Opinion...." id="opinion" name="opinion">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" onclick="fun()" value="Post" ondblclick="myFunction()">
                            </td>
                        </tr>
                        
                    
                    </table>                    
                </form>
            </div>

        </div>
        <script>
                function fun()
                {
                    var e=document.getElementById("email").value;
                    var o=document.getElementById("opinion").value;

                    if(e=="")
                    {
                        alert("please!!enter email correct");
                        
                    }
                    else if(o=="")
                    {
                        alert("please!!enter your opinion");
                    }
                    else{
                        alert("Thank You For Your FeedBack");
                        window.open("main1.php");
                    }
                    if(e!="" && o!="")
                    {
        
                        window.close("pop1.html");
        
                    }
                    
                }
           
        </script>
        

    </body>
</html>