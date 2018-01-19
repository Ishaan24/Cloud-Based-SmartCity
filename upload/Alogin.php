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
      <h1>Welcome Admin Please log in to Continue</h1>
         <form name="log" action="ALoginServlet" method="post">
            <table align="center" bgcolor="black" cellpadding="10px" colspan="2">
                <tr>
                    <td><b>User name</b></td>
                    <td> <input type="text" name="userid" required></td></tr>
                <tr>
                    <td><b>Password</b></td>
                    <td><input type="password" name="pwd" required></td>
                    
                </tr>
                <tr >
                    <td align="center" colspan="2">
                        <input type="Submit" value="Login">
                    </td>
                </tr>
            </table>
        </form>
       <p>Steps to login as a Admin <a href="http://www.google.co.in/">Search Web</a>. This Website is a trade mark of US Corp </p>
   
    <ul>
      <li>Enter Valid User name(Unique id)</li>
      <li>Enter Valid Password</li>
      <li>Click on Login</li>
      <li>There you go champ!!.</li>
      <li>In case you are a not a register user you can register at <a herf="Register.jsp">Register yourself!! </a> .</li>
    </ul>
    <p>It has been suggested that a smart city (also community, business cluster, urban agglomeration or region) use information technologies to:<br></p>
    <ol>
      <li>Orchestration intelligence: Where cities establish institutions and community-based problem solving and collaborations, such as in Bletchley Park, where the Nazi Enigma cypher was decoded by a team led by Alan Turing. This has been referred to as the first example of a smart city or an intelligent community..</li>
      <li>Empowerment intelligence: Cities provide open platforms, experimental facilities and smart city infrastructure in order to cluster innovation in certain districts. These are seen in the Kista Science City in Stockholm and the Cyber port Zone in Hong Kong. Similar facilities have also been established in Melbourne.</li>
      <li>instrumentation intelligence: Where city infrastructure is made smart through real-time data collection, with analysis and predictive modelling across city districts. There is much controversy surrounding this, particularly with regards to surveillance issues in smart cities. Examples of Instrumentation intelligence have been implemented in Amsterdam.This is implemented through.</li>
      
      <li>A common IP infrastructure that is open to researchers to develop applications.</li>
      <li>Wireless meters and devices transmit information at the point in time.</li>
      <li>A number of homes being provided with smart energy meters to become aware of energy consumption and reduce energy usage</li>
      <li>Solar power garbage compactors, car recharging stations and energy saving lamps.</li>
    </ol>
    </div>
</div>
    </body>
    <%@include file="footer.jsp" %>
</html>
