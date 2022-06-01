<html>

<body>
    <form method="post" action="savedataadmin.php">
        <table align="center" border="1" width="70%">

            <th colspan="2"> Add a New Drive for Placement </th>
            <tr>
                <td>
                    <div class="labl">Job ID: </div>
                </td>
                <td><input type="text" name="JobID"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Job Description: </div>
                </td>
                <td><input type="text" name="JobDesc"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Company Name: </div>
                </td>
                <td><input type="text" name="Company"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Post Date: </div>
                </td>
                <td><input type="date" name="PostDate" value=<?php echo date('d-m-y'); ?>> </td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Interview Date: </div>
                </td>
                <td><input type="date" name="Interdate"> </td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Job Expiry Date: </div>
                </td>
                <td><input type="date" name="expDate" value=<?php echo date('d-m-y'); ?>> </td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Stream: </div>
                </td>
                <td> <select name="strm">
                        <option value="" selected="disabled">----------------------- select Your Option -----------------------</option>
                        <option value="Comp Science">Computer Science Engineering</option>
                        <option value="Civil">civil Engineering</option>
                        <option value="Electrical">Electrical Engineering</option>
                        <option value="Mehancical">Mechanical Engineering</option>
                        <option value="Electronics">Electronics Engineering</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Qualification: </div>
                </td>
                <td><select name="Qual">
                        <option value="" selected="disabled">----------------------- select Your Option -----------------------</option>
                        <option value="BE">BE</option>
                        <option value="B.Tech">B.Tech</option>
                        <option value="ME">ME</option>
                        <option value="M.Tech">M.Tech</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Other Requirements: </div>
                </td>
                <td><input type="text" name="oreq"> </td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Salary Package: </div>
                </td>
                <td><input type="text" name="salPack" width="300px"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Location: </div>
                </td>
                <td><input type="text" name="Loc"> </td>
            </tr>

            <th colspan="2"> <input type="submit" name="submit" value="Save Job" > </th>
        </table>

    </form>
</body>

<style>
    table {
        margin-top: 10px;
        border-color: #00f1f1;
        border-collapse: collapse;

    }

    tr {
        height: 40px;
    }

    th {
        background-color: lightsteelblue;
        text-align: center;
        padding: 10px;

    }

    td {
        background-color: lightgoldenrodyellow;
        text-align: center;
    }

    input[type="text"],
    input[type="submit"],
    input[type="date"] {
        width: 100%;
        border: none;
        box-sizing: border-box;
        background: transparent;
        padding: 10px;
        color: #000;
    }

    input[type="text"]:focus,
    input[type="submit"]:focus,
    input[type="date"]:focus {
        outline: none;
    }

    input[type="submit"]:hover {
        background-color: #00BCD4;
        transition-duration: 0.5s;
    }

    input[type="submit"] {
        background: #fc3955;
        color: #ffffff;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: none;
        padding: 12px 60px;
        cursor: pointer;
        width: 100%;
        border-radius: 6px;
    }

    select {
        width: 100%;
        border: none;
        box-sizing: border-box;
        background: transparent;
        padding: 10px;
        color: #000;
    }
</style>

</html>
 