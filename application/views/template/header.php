  <div class="container">
  <table border="1">
            <td><a href="Register.jsp">User Informations</a></td>
            <td><a href="./AllUsers.jsp">User Informations</a></td>
        </table> 
        
         <h4>REGISTRATION</h4>
        
         <form method="post" action="./UserServlet">
            <table>
                 <tr>
                    <tr>
                        <td align="right"><b>User Name :</b></td>
                        <td><input type="text" value="" name="textusername" placeholder="User Name" size="75"></td>
                     </tr>
                                        
                    <tr>
                        <td align="right"><b>DateCreated :</b></td>
                        <td><input type="text" value="" name="textDateCreated" placeholder="Date Create" size="75"></td>
                    </tr>
                    
                    <tr>
                        <td align="right"><b>DateUpdated :</b></td>
                        <td><input type="text" value="" name="textdateupdated" placeholder="Date Updated" size="75"></td>
                    </tr>
                    
                    <tr>
                        <td align="right"><b>Description :</b></td>
                        <td><textarea name="textdescription" cols="75" rows="6"></textarea></td>
                    </tr>
                   
                    </tr>
                    
                    <tr>
                     
                    </tr>
                    
                     <tr>
                         <td></td>
                         <td colspan="2"><input type="Submit" name="operetion" value="save" />
                         <input type="Submit" name="operation" value="Edit" />
                         <input type="Submit" name="operation" value="Delete" />
                         <input type="Submit" name="operation" value="Search" />
                             
                    </tr>

                </table>
        </form>
		</div>