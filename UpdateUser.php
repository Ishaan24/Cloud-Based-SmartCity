<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
    
 <%@ page import="java.sql.*" %>   
 <%@  page import="com.ibm.dao.*" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<%
String id=request.getParameter("ABCD");
System.out.println(id);
String sql="select * from register where id=?";
ResultSet rs1=MyConn.FetchAllData(sql, id);

out.println("<form method='post' action='UpdateServlet'>");
out.println("<center><table>");

while(rs1.next())
{

out.println("<tr><td>ID</td><td><input type='text' name='id' value='"+rs1.getString(1)+"' readonly='readonly'/></td></tr>");
out.println("<tr><td>NAME</td><td><input type='text' name='name' value='"+rs1.getString(2)+"'/></td></tr>");
out.println("<tr><td>EIDID</td><td><input type='text' name='eid' value='"+rs1.getString(3)+"'/></td></tr>");
out.println("<tr><td>USERID</td><td><input type='text' name='userid' value='"+rs1.getString(4)+"'/></td></tr>");
out.println("<tr><td>PWD</td><td><input type='text' name='pwd' value='"+rs1.getString(5)+"'/></td></tr>");
out.println("<tr><td>CNO</td><td><input type='text' name='cno' value='"+rs1.getString(6)+"'/></td></tr>");
out.println("<tr><td>CITY</td><td><input type='text' name='city' value='"+rs1.getString(7)+"'/></td></tr>");
}
out.println("</table>");
out.println("<input type='submit' value='UPDATE'></form>");


if(request.getParameter("var")!=null)
{
	out.println("<h3>"+request.getParameter("var")+"</h3>");
}
%>
</body>
</html>