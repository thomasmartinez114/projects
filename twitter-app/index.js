const Twitter = require('twitter-lite');


(async function() {
    const user = new Twitter({
        consumer_key: "NAemcV2ExuYVEmG6XsTfWz7c8",
        consumer_secret: "tAJx8ENG6GlbyoHE72k1IEVmTCOtbGbEJWy25OWrSyQhfJCPNn",
    });

    try {
        let response = await user.getBearerToken();
        // Construct API client with the bearer token.
        const app = new Twitter({
            bearer_token: response.access_token,
        });

        // Search for recent tweets from the twitter API
        response = await app.get(`/search/tweets`, {
            q: "Michael Jordan", // Search term
            lang: "en",
            count: 5,
        });

        // Loop over the tweets and print the text
        for (tweet of response.statuses) {
            console.dir(tweet.text);
        }

        // // Retrieve bearer token from twitter
        // const response = await user.getBearerToken();
        // console.log(`Retrieved the Bearer token from twitter: ${response.access_token}`);

    } catch(e) {
        console.log("There was an error calling the Twitter API.");
        console.dir(e);
    }
})();