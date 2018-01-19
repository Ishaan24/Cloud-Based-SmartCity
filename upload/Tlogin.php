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
      <h1>Welcome Tourist Please log in to Continue</h1>
         <form name="log" action="TLoginServlet" method="post">
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
       <p>Steps to login as a Tourist <a href="http://www.google.co.in/">Search Web</a>. This Website is a trade mark of US Corp </p>
   
    <ul>
      <li>Enter Valid User name(Unique id)</li>
      <li>Enter Valid Password</li>
      <li>Click on Login</li>
      <li>There you go champ!!.</li>
      <li>In case you are a not a register user you can register at <a herf="#">Register yourself!! </a> .</li>
    </ul>
    <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede estibulum nulla orna nisl velit elit ac aliquat non tincidunt. Namjusto cras urna urnaretra lor urna neque sed quis orci nulla. Laoremut vitae doloreet condimentumst phasellentes dolor ut a ipsum id consectetus. Inpede cumst vitae ris tellentesque fring intesquet nibh fames nulla curabitudin.</p>
    <ol>
      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <li>Etiam vel sapien et est adipiscing commodo.</li>
      <li>Duis pharetra eleifend sapien, id faucibus dolor rutrum et.</li>
      <li>Donec et dui dolor, in lacinia leo.</li>
      <li>Mauris posuere tellus ac purus adipiscing dapibus.</li>
    </ol>
    </div>
</div>
    </body>
    <%@include file="footer.jsp" %>
</html>
