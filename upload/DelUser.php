<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
    <%@ page import="java.sql.*" %>
    <%@ page import="dao.*" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
    <%@include file="header.jsp" %>
<%
String sql="select * from register";
ResultSet rs=MyConn.FetchAllData(sql);


out.println("<form method='post' action='DeleteUser'>");
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
out.println("<td><input type='checkbox' name='ABCD' value='"+rs.getString(1)+"' /></td>");
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
out.println("<input type='submit' value='DeleteUser'></form>");


if(request.getParameter("var")!=null)
{
	out.println("<h1><font color='red'>"+request.getParameter("var")+"</font></h1>");
}


%>
<%@include file="footer.jsp" %>
</body>

</html>