<%@ page import = "java.io.*,java.util.*" %>
<%
	String username = request.getParameter("username");
	if(username != null && !username.equals("")){
		session.setAttribute("id",4);
	}
	else if(session.getAttribute("id")== null){
		response.sendRedirect("login.jsp");
	}
%>

<html>
   <head>
      <title>Session Tracking</title>
   </head>
   
   <body>
      <center>
         <h1>Session Tracking</h1>
      </center>
      
  	<p><% if (!session.isNew()) out.println("GOT A THING");%></p>
   
   </body>
</html>