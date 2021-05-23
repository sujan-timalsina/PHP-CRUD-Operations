<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Regex</title>
</head>

<body>


    <script>
        let reg = /learning/; //This is a regular expression literal in js
        // reg = /Learning/g; //g means global
        // reg = /Learning/i; //i means case insensitive
        // console.log(reg);

        // console.log(reg.source);

        let s = "LEARNING Regular Expression, self learning ";
        // Functons to match expressions
        // 1. exec()-This Function will return an array for match or null for no match

        let result = reg.exec(s);

        if (result) {
            console.log(result);
            console.log(result.input);
            console.log(result.index);
        }

        // result = reg.exec(s);
        // console.log(result);

        // result = reg.exec(s);
        // console.log(result); ----> we can use multiple exec with global flag

        // If there is two same word first word's index will only Shown, to show all regex litral indexes that belongs to string literal then we should use flag

        //flag
        // /regex here.../g use of g at last(global)
        // to show different n indexes of same word, we should run exec() method n times

        //concept: to run while loop or to iterate until it finds null

        // 2. test() - Returns true or false
        let result2 = reg.test(s);
        console.log(result2); //---->This will only print true if the "reg" is there in the string;

        // 3. match() ---> It will return an array of results or null

        // let result3=reg.match(s); --->This is wrong, match() is used in opposite way than above other two 
        let result3 = s.match(reg);
        console.log(result3);
        //In g(global), yesle ekai choti matches haru dekhauxa sabai. Eutai match() mehod le exec() jati n choti method use garnu pardaina

        // 4. search() --- Returns index of first match else -1
        // let result4 = reg.search(s) -->This is wrong
        let result4 = s.search(reg) //This is right
        console.log(result4);

        // 5.replace()-- - Returns new replaced string with all replacements (if no flag is given, fist match will be replaced)
        let result5 = s.replace(reg, '(change)');
        console.log(result5);
        //If g flag is not given then only one word which comes first in index will only change
    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>