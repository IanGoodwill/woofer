
// script for likes
var updatePostStats = {
    Like: function (postId) {
        document.querySelector('#likes-count-' + postId).textContent++;
    },

    Unlike: function(postId) {
        document.querySelector('#likes-count-' + postId).textContent--;
    }
};


var toggleButtonText = {
    Like: function(button) {
        button.textContent = "Unlike";
    },

    Unlike: function(button) {
        button.textContent = "Like";
    }
};

var actOnPost = function (event) {
    var postId = event.target.dataset.postId;
    var action = event.target.textContent;
    toggleButtonText[action](event.target);
    updatePostStats[action](postId);
    axios.post('/posts/' + postId + '/act',
        { action: action });
};

Echo.channel('post-events')
.listen('PostAction', function (event) {
    console.log(event);
    var action = event.action;
    updatePostStats[action](event.postId);
})

