<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aliens Abducted Me - Report an Abduction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="container p-5" >
        <div class="row">
            <h1>Aliens Abducted me - Report an Abduction</h1>    
        </div>

        <div class="row">
            <form>
                <div class="mb-3">
                    <label for="firstNome" class="form-label">First Name:</label>
                    <input type="text" class="form-control" id="firstNome" >                    
                </div>

                <div class="mb-3">
                    <label for="lastNome" class="form-label">Last Name:</label>
                    <input type="text" class="form-control" id="lastNome" >                    
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">What is your e-mail address?</label>
                    <input type="text" class="form-control" id="email" >                    
                </div>

                <div class="mb-3">
                    <label for="when_happen" class="form-label">When did it happen?</label>
                    <input type="text" class="form-control" id="when_happen" >                    
                </div>

                <div class="mb-3">
                    <label for="how_long_gone" class="form-label">How long were you gone?</label>
                    <input type="text" class="form-control" id="how_long_gone" >                    
                </div>

                <div class="mb-3">
                    <label for="how_many_see" class="form-label">How many didi you see?</label>
                    <input type="text" class="form-control" id="how_many_see" >                    
                </div>

                <div class="mb-3">
                    <label for="describe" class="form-label">Describe then:</label>
                    <input type="text" class="form-control" id="describe" >                    
                </div>

                <div class="mb-3">
                    <label for="what_they_you" class="form-label">What did they do you?</label>
                    <input type="text" class="form-control" id="what_they_you" >                    
                </div>

                <div class="mb-3">
                    <label for="see_fang" class="form-label">Have you seen my dog Fang?</label>
                    <img src="{{ asset('img/fang.jpg')}}" class="img-thumbnail" alt="Fang">                
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="see_fang" id="inlineRadio1" value="yes">
                        <label class="form-check-label" for="inlineRadio1">Sim</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="see_fang" id="inlineRadio2" value="no">
                        <label class="form-check-label" for="inlineRadio2">Não</label>
                      </div>  
                </div>

                <div class="mb-3">
                    <label for="comments" class="form-label">Anything else you want to add?</label>
                    <input type="text" class="form-control" id="comments" >                    
                </div>
                <button type="submit" class="btn btn-primary">Report Abduction</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>