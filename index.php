<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
</head>
<body>
    <section>
        <h1>Exercise #1</h1>
        <p>Print the first n terms of the Fibonacci series</p>
        <form action="./fibonacci.php" method="POST" target="_blank">
            <input name="length" type="number" placeholder="Type a integer number">
        </form>
    </section>
    <section>
        <h1>Exercise #2</h1>
        <p>Check if the given number is prime</p>
        <form action="./prime.php" method="POST" target="_blank">
            <input name="prime" type="number" placeholder="Type a integer number">
        </form>
    </section>
    <section>
        <h1>Exercise #3</h1>
        <p>Check if the given string is palindrome (case sensitive)</p>
        <form action="./palindrome.php" method="POST" target="_blank">
            <input name="word" type="text" placeholder="Type a word">
        </form>
    </section>
</body>

</html>