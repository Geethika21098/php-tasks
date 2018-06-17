<!doctype html>
<html>
<head>
  <title>TASK-4</title>
  <style type="text/css">
    
  </style>
</head>


<body>
  <form action='insert.php' method='POST' id='myform' enctype="multipart/form-data">

    <fieldset><br/>
      <legend><b>Registration Form</b></legend>

      <label for='name'>Name</label>
      &nbsp; &nbsp; <input type='text'  name='name' size='50'  placeholder='Enter your name'  required="required" autofocus="AUTOFOCUS" autocomplete="autocomplete" /></input><br/><br/>

      <label for='phone'>Mobile Number</label>&nbsp; 
      &nbsp; <input type='tel' name='phone' size='50' placeholder="Enter mobile number" autocomplete="autocomplete"  pattern="[0-9]{10}"/><br/><br/>

      <label for="email">Email ID</label>
      &nbsp; &nbsp; <input type='email' name='email' size='50' placeholder="Enter your email address" autocomplete="autocomplete" /></input><br/><br/>

      <label for='password' >Password </label>
      &nbsp; &nbsp; <input type='password' name='pwd'  placeholder="Enter the password"  pattern=[a-zA-Z0-9]{8} size='50' required="required"/><br/><br/>


      <label for='gender' >Gender</label>
      &nbsp; <input type='radio' name='gender'value='male' required='required'>Male</input>
      <input type='radio' name='gender' value='female'>Female</input>
      <input type='radio' name='gender' value='others'>Others</input><br/><br/>


      <label for='course' >Courses Joined(only one course per an individual)</label>
      &nbsp; <input type="radio" name="course" value="java" required="required" >Java</input>
      <input type="radio" name="course" value="php" >PHP</input>
      <input type="radio" name="course" value="mobile computing" >Digital Marketing</input>
      <input type="radio" name="course" value="android" >Android</input>
      <input type="radio" name="course" value="web Development" >Web Design(UI)</input><br/><br/>



      <label for="Date" >Start Date</label>
      &nbsp; <input type="date" name='sdate' value="1947-01-01" required="required"> </input>&nbsp; &nbsp; 
      <label for="Date" >End Date</label>
      <input type="date" name="edate" value="1947-01-01" required="required"></input><br/><br/>


      <label for='hours' >Min Class Hours</label>
      &nbsp; <input type='number' name='duration' min="1" max="4" value="2" required='required' /><br/><br/>

      <label for="shift time">Choose Shift time:</label>
       <select name="shtime" id="stime">
          <option value="Morning">Morning</option>
          <option value="AfterNoon">AfterNoon</option>
          <option value="Evening">Evening</option>
      </select>
      <br/><br/>

      <label for='city' >City:</label>&nbsp; 
        <select name="city">
          <option value="Hyderabad">Hyderabad</option>
          <option value="Chennai">Chennai</option>
          <option value="Delhi">Delhi</option>
          <option value="Kolkata">Kolkata</option>
          <option value="Bangalore">Bangalore</option>
          <option value="Ahmedabad">Ahmedabad</option>
          <option value="Pune">Pune</option>
      </select> <br/><br/>


       <label for="upload">Upload Image(optional)</label>
      &nbsp; <input type="file" name="file"><br/><br/>

      <label for='comment' >Comments:</label><br/>
      <textarea rows="8" cols='45' name='comment' ></textarea><br/><br/>


      <input type='submit' name='submit' value="Register" />

      <input type='reset' name='reset' value='Cancel'/>
  
    </fieldset>

  </form>
</body>
</html>