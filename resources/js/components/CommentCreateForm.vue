<template>

    <form :action="submissionUrl" method="POST">
       <slot> </slot>

        <div class="form-group">
            <input type="text" name="content" v-model="content" class="form-control" />
            <input type="hidden" name="post_id" :value="postId" />
            <input type="hidden" name="parent_id" :value="commentId" />
        </div>
        
        <div class="form-group">
            <input type="submit" class="btn btn-warning" value="Reply" />
        </div>
    </form>
 
</template>


<script>
export default {
    name: 'comment-create-form',
    props: [ 'submissionUrl', 'postId', 'commentId' ],
    computed: {
        content: {
            get ()
            {
                return this.$attrs.value;
            },
            set ( value )
            {
                this.$emit( 'input', value )
            }
        }
    }
  
    
    
}
</script>

