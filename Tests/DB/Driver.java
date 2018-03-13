import java.sql.*;

public class Driver {
	public static void main(String[] args) {
		try {
			// 1. get a connection to database
			Connection myConn = DriverManager.getConnection("jdbc:mysql://localhost:3306/demo","")
					
			// 2. Create a statement
			
			// 3. Execute SQL query
			
			// 4. Process the result set
		}
		catch(Exception e) {
			e.printStackTrace();
		}
	}

}
