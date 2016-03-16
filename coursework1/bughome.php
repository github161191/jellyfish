

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BUG TRACKING SYSTEM - Home (Welcome)</title>
    <link type="text/css" rel="stylesheet" href="bug.css"/>
</head>
<body>
<h1> BUG TRACKING SYSTEM </h1>
<h3> Report New Bugs Here </h3>
<form method="post" action="buglist.php">
<div id="Bug information">
    <fieldset>

        <table>
            <tr>
                <td> <label for="bugtitle">Bug Title:</label> </td>
                <td> <input type="text" name="bugtitle" value="" required /> </td>
            </tr>
            <tr>
                <td> <label for="bugDesc">Bug Description:</label> </td><br>
                <td><textarea name="bugDesc" cols="40“ rows="2 required> </textarea></td>

            </tr>
            <tr>
                <td> <label for="Username"> Username:</label> </td>
                <td> <input type="text" name="username" value="" required/> </td>
            </tr>
            <tr>
                <td> <label for="Dateposted"> Date Posted:</label> </td>
                <td> <input type="date" name="dateposted" placeholder="dd/mm/yyyy" required /> </td>
            </tr>

            <tr>
                <td> <label for="bugstatus">Bug Status:</label> </td>
                <td> <select name="bugstatus" required>
                    <option value="">Select BugStatus</option>
                    <option value="fixed">Fixed</option>
                    <option value="unfixed">Unfixed</option>
                </select> </td>
            </tr>
            <tr>
                <td> <label for="Datefixed"> Date Fixed:</label> </td>
                <td> <input type="date" name="datefixed" value="dd/mm/yyyy" required /> </td>
            </tr>
           <div id="bugfileupload">
               <tr>
               <td><input type="file" name="bugfile"> </td>
                   <td> <input type="submit" value="Upload Bug file"> </td>
               </tr>
           </div>

            <div id="Comment">
                <tr>
                    <td><label for="comment">Comment: </label> </td>
                    <td> <textarea name="comment" rows="5" cols="40"></textarea> </td>
                </tr>
            </div>
            <div id="submitbutton">
            <tr>
                <td> <input type="submit" value="Submit"> </td>
            </tr>
            </div>

        </table>

    </fieldset>


</div>
    </form>

</body>
</html>