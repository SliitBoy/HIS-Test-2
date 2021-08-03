function setDates(dob, type)
{
    var now = new Date();

        var yearNow = now.getFullYear();
        var monthNow = now.getMonth();
        var dateNow = now.getDate();

        //date must be mm/dd/yyyy
        console.log(dob);
        var d = new Date(dob);
        //var d = new Date(dob),

        var yearDob = d.getFullYear();
        var monthDob = d.getMonth();
        var dateDob = d.getDate();
        var age = {};
        var ageString = "";
        var yearString = "";
        var monthString = "";
        var dayString = "";

        var monthType = 0;
		console.log("monthNow:"+monthNow);
        switch(monthNow)
        {
            case 0:
            case 3:
            case 5:
            case 8:
            case 10:
                monthType = 31;
                break;

        }
        switch(monthNow)
        {
            case 2:
            case 4:
            case 6:
            case 7:
            case 9:
            case 11:
                monthType = 32;
                break;

        }
        switch(monthNow)
        {
            case 1:
                if(!(((yearNow % 4 == 0) && (yearNow % 100 != 0)) || (yearNow % 400 == 0)))
                    monthType = 29;
                else
                    monthType = 30;
                break;


        }
        if (dateNow >= dateDob){

            var dateAge = dateNow - dateDob;
            if(dateAge < 0)
            {
                dateAge = monthType - dateAge;
            }
        
        }
        else
        {
            monthNow--;

            var dateAge = monthType - (dateDob -dateNow);
            if(dateAge < 0)
            {
                dateAge = monthType - dateAge;
            }
        }
         


        if (monthNow >= monthDob)     
          var monthAge = monthNow - monthDob;
        else {
          yearNow--;
          var monthAge = 12 + monthNow - monthDob;

        }

        var yearAge = yearNow - yearDob;


        year_age = yearAge;
        month_age = monthAge;
        day_age = dateAge;
    /*console.log(dob);
    var d = new Date(dob);
    //var d = new Date(dob),
    month = '' + (d.getMonth() + 1),
    day = '' + d.getDate(),
    year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    var leapYearCount = 0;
            
    var mdate = [year, month, day].join('-');
    console.log(mdate);
    var yearThen = parseInt(mdate.substring(0,4), 10);
    var monthThen = parseInt(mdate.substring(5,7), 10);
    var dayThen = parseInt(mdate.substring(8,10), 10);
    
    var today = new Date();
    var birthday = new Date(yearThen, monthThen-1, dayThen);

    for (var i=year; i < today.getFullYear(); ++i) {
      if (!(i%4)&&(i%100)||!(i%400) ) leapYearCount++;
    }
    
    console.log("number of leap years = "+leapYearCount);

    leapYearCount = 5*86400000;
    var differenceInMilisecond = today.valueOf() - birthday.valueOf();
    
    var year_age = Math.floor((differenceInMilisecond - leapYearCount)/ 31536000000);
    var day_age = Math.floor(((differenceInMilisecond - leapYearCount) % 31536000000) / 86400000);
    
    if ((today.getMonth() == birthday.getMonth()) && (today.getDate() == birthday.getDate())) {
        //alert("Happy B'day!!!");
    }
    
    var month_age = 0;
    console.log("day_age="+day_age+", leapcount="+leapYearCount);

    month_age = Math.floor(day_age/30);
    day_age = day_age % 30;*/

    
    if (isNaN(year_age) || isNaN(month_age) || isNaN(day_age)) {
        //$("#exact_age").text("Invalid birthday - Please try again!");
        return "invalid";
        //$('#ageY').val("invalid");
        //$('#ageM').val("invalid");
        //$('#ageD').val("invalid");
    }
    else {
        console.log("type = "+ type);
        if(type == 'full')
        {
            console.log(year_age +"Yrs "+month_age+"Mths "+day_age+"Dys");
            document.write(year_age +"Yrs "+month_age+"Mths "+day_age+"Dys");
        }
        else if(type == 'years')
        {
            console.log("years = "+year_age);
            return year_age;
        }
        else if(type == 'months')
        {
            console.log("months = "+month_age);
            return month_age;
        }
        else if(type == 'days')
        {
            console.log("days = "+day_age);
            return day_age;
        }
        else
        {
            console.log(year_age +"Yrs ");
            if(year_age == 0)
            {
                document.write(year_age +"Yrs "+month_age+"Mths "+day_age+"Dys");
            }
            else if (year_age <= 5)
            {
                document.write(year_age +"Yrs "+month_age+"Mths ");
            }
            else
            {
                document.write(year_age +"Yrs ");
            }
        }
        //$('#ageY').val(year_age);
        //$('#ageM').val(month_age);
        //$('#ageD').val(day_age);
    }


            
}




