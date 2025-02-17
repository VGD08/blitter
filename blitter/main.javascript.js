document.getElementById('tweet-button').addEventListener('click', function() {
    const tweetText = document.getElementById('new-tweet').value;
    if (tweetText) {
        const tweetContainer = document.createElement('div');
        tweetContainer.className = 'tweet';
        tweetContainer.textContent = tweetText;
        document.getElementById('tweets').prepend(tweetContainer);
        document.getElementById('new-tweet').value = '';
    }
});