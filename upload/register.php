<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <%@include file="header.jsp" %>
    </head>
    <body>
        <div id="container">
  <div class="wrapper">
     <h1>Register yourself for the Future.</h1>
         <form name="register" action="RegisterServlet" method="post">
            <table align="center" bgcolor="black" cellpadding="10px" colspan="2">
                <tr>
                    <td>Your name</td>
                    <td> <input type="text" name="name" required></td>
                    <td>Your Email-ID</td>
                <td><input type="text" name="eid" required></td></tr>
                <tr>
                    <td>User ID</td>
                    <td> <input type="text" name="userid" required></td>
                    <td><b>Password</b></td>
                    <td><input type="password" name="pwd" required></td>                  
                </tr>
                <tr>
                    <td>Contact no</td>
                    <td> <input type="text" name="cno" required></td>
                    <td>City</td>
                    <td> <input type="text" name="city" required></td>
                </tr>
                
                <tr>
                    <td align="center" colspan="4">
                        <input type="Submit" value="Register yourself!!">
                    </td>
                </tr>
            </table>
        </form>
       <p>Steps to Register as an User <a href="http://www.google.co.in/">Search Web</a>. This Website is a trade mark of US Corp </p>
   
    <ul>
      <li>Enter Your Name(First name only)</li>
      <li>Enter Your E-Mail(Unique id)</li>
      <li>Enter Valid User name(Unique id)</li>
      <li>Enter Valid Password</li>
      <li>Click on Register yourself!!!</li>
      <li>There you go champ!!.</li>
      <li>In case you are already registerd user you can login at <a herf="Alogin.jsp">Login as an Admin.  </a> <a herf="tlogin.jsp">Login as a Tourist. </a><a herf="jlogin.jsp">Login as a Jobseeker. </a></li>
    </ul>
   
    </div>
</div>
    </body>
    <%@include file="footer.jsp" %>
</html>
