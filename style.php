<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: start;
            min-height: 100vh;
        }
        header {
            text-align: center;
            margin: 20px 0;
        }
        .logo-img {
            width: 150px;
        }
        main {
            max-width: 600px;
            width: 90%;
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-top: 10px;
        }
        h1 {
            text-align: center;
            color: black;
        }
        form {
            margin: 30px;
        }
        form > input {
            display: block;
            width: 270px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .submit-button {
            width: 100%;
            background-color: #212E51;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 4px;
        }
        .submit-button:hover {
            background-color: #0056b3;
        }

        /* responsive pour qu'en desktop le login et register soit cote a cote */

        @media (min-width:768px) {
            main{
                display: flex;
                position: relative;
            }
            .articles{
                position: absolute;
                right: -5%;
            }
            .articles{
                display: flex;
            }
            .break{
                border: solid black .05rem;
                height: 20rem;
            }
        }
</style>

