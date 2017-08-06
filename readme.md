## About Playground

playground is a laravel app + vuejs for the fronend that implements best practices based on my knowledge as a web developer ( backend and frontend ), it showcase how a real production app should be created.
___

##### Below are some best practices that a production app should use or should consider to use

* Backend
  - [ ] Repository Pattern
  - [ ] Gateway Pattern ( an extra service layer for your controller and your repository )
  - [x] MVC ( Laravel provides this already )
  - [ ] Transformer Pattern for your API JSON response
  - [ ] View Presenter Pattern for your view pages
  - [ ] OAuth2 
  - [ ] Database such as;
            * MySQL
            * [x] SQLITE
            * etc ( mongoDB, Postre )
                -- Make sure to pick what's best for your app as i used SQLITE for testing purposes only
      
  - [ ] Web Socket for real time update
  
* Frontend
  - [x] css compiler ( included in mix/elixir)
  - [x] js compiler ( included in mix/exlisir )
  - [x] optionally a js framework that uses 
    -- MVC pattern
    -- MVVM ( model-view-viewmodel )
    -- any architecture that may lessen day to day problem such as;
       - Component Architecture
       - Flux, Application Architecture or
       - Redux or
       - Vuex
       - Or Much better to create your own :smiley: for learning ofcourse 
    -- note that i'am going to use Vue + Vuex for playground, I used Vuex as it is implicitly developed for Vue, any matured framework such as ReactJs + Redux that developed by Facebook maybe much suitable than Vuejs
 
   - [] A web socket client for real time update

--- 

## Playground features
 i'll probably create a simple blog or something like a CMS which will be upgraded over like creating features
  * [ ] Real Time Update
  * [ ] Div Mark Down Editor
  * [ ] Chat Box
