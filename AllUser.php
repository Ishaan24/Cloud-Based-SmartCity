<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ page import="dao.*" %>
<%@ page import="java.sql.*" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style>
    <%@include file="header.jsp" %>
table
{
 width: 700px;
 color:blue;
 background-color: yellow;
}
tr
{
background-color: pink;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<%
String sql="select * from register";
ResultSet rs=MyConn.FetchAllData(sql);


out.println("<form method='post' action='UpdateUser.jsp'>");
out.println("<center><table><tr>");
out.println("<th>RADIO BUTTON</th>");
out.println("<th>ID</th>");
out.println("<th>NAME</th>");
out.println("<th>USER ID</th>");
out.println("<th>EID</th>");
out.println("<th>PWD</th>");
out.println("<th>CNO</th><th>CITY</th></tr>");

while(rs.next())
{
out.println("<tr>");
out.println("<td><input type='radio' name='ABCD' value='"+rs.getString(1)+"' /></td>");
out.println("<td>"+rs.getString(1)+"</td>");
out.println("<td>"+rs.getString(2)+"</td>");
out.println("<td>"+rs.getString(3)+"</td>");
out.println("<td>"+rs.getString(4)+"</td>");
out.println("<td>"+rs.getString(5)+"</td>");
out.println("<td>"+rs.getString(6)+"</td>");
out.println("<td>"+rs.getString(7)+"</td>");
out.println("</tr>");
}
out.println("</table>");
out.println("<input type='submit' value='VIEW'></form>");





%>
<%@include file="footer.jsp" %>
</body>
</html>