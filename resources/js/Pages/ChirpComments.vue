<template>
    <div>
        <h2>Comments for Chirp Nr: <b>{{ chirp }}</b></h2>
        <ul>
            <li v-for="comment in comments" :key="comment.id">
                {{ comment.content }}
            </li>
        </ul>
        <!-- Add a form to submit new comments -->
        <form @submit.prevent="addComment">
            <input v-model="newComment" placeholder="Add a comment">
            <button type="submit">Submit</button>
        </form>
    </div>
</template>

<script>
export default {
    props: {
        chirp: String, // Pass the Chirp ID from the route
        comments: Array, // Pass the comments from the parent component
    },
    data() {
        return {
            newComment: '',
        };
    },
    methods: {
        async addComment() {
            try {
                // Validate the new comment (you can add more validation rules)
                if (!this.newComment.trim()) {
                    // Display an error message or handle validation as needed
                    return;
                }
                // Send the new comment to the server (using Inertia.post or other methods)
                await this.$inertia.post(route('comments.store'), {
                    chirp_id: this.chirp, // Pass the Chirp ID
                    content: this.newComment, // Pass the comment content
                });
                // Clear the input field after successful submission
                this.newComment = '';

                // Optionally, you can fetch updated comments from the server
                // and update the local comments array.
                // For simplicity, I'm assuming the server will handle this.

                // You can also show a success message to the user.
            } catch (error) {
                // Handle any errors (e.g., display an error message)
                console.error('Error adding comment:', error);
            }
        },
    },
};
</script>
