const Twitter = require('twitter-lite');

const user = new Twitter({
    consumer_key: "NAemcV2ExuYVEmG6XsTfWz7c8",
    consumer_secret: "tAJx8ENG6GlbyoHE72k1IEVmTCOtbGbEJWy25OWrSyQhfJCPNn",
});

(async function() {
    try {
        // Retrieve bearer token from twitter
        const response = await user.getBearerToken();
        console.log(`Retrieved the Bearer token from twitter: ${response.access_token}`);

        // Construct API client with the bearer token.
        const app = new Twitter({
            bearer_token: response.access_token,
        });
    } catch(e) {
        console.log("There was an error calling the Twitter API.");
        console.dir(e);
    }
})();