<template>
  <section class="container">
  
    <h3> Search For A Gif! </h3>
    <div class="columns">
      <form @submit="giphySearch" class="column is-one-fifth" action="#" method="GET">
        <div class="field">
          <label class="label" for="giphy-search">Search</label>
          <div class="control">
            <input v-model="searchTerm" class="input" type="text" name="giphy-search" placeholder="Enter Search Term..." />
          </div>
        </div>

        <div class="field is-grouped">
          <div class="control">
            <button type="submit" class="button is-link">Submit</button>
          </div>
        </div>
      </form>

      <div class="column is-four-fifths">
      <ul class="columns is-multiline">
        <li v-for="image in results.data" :key="image.id" class="column is-one-quarter">
         <img 
         :src="image.images.fixed_width.url"
          alt="image.title" 
          :title="image.title"
         @click="getImageUrl">
        </li>
      </ul>
      </div>

    </div>
  </section>
</template>

<script>
export default {
  name: "Giphy",
  data ()
  {
    return  {
      searchTerm: '',
      results: {}
    }
  },
  methods:  {
    giphySearch  (event)
    {
      event.preventDefault();
      // Pull data from giphy API
      fetch ( 'https://api.giphy.com/v1/gifs/search?api_key=neBp6gQS0nNqR101E7H6f6fzaDzJ6Fwg&limit=25&offset=0&rating=G&lang=en&q='+this.searchTerm )
      .then( ( response ) => response.json() ) // Convert to JS Object
      .then( data => { // Store the returned data in our "results."
        this.results = data;
      } );
    },
    getImageUrl ( event )
    {
      const img = event.target;
      this.$emit( 'image-clicked', img.src ); // Bubble upward an "imageClicked" event with the img src
    }
  }
};
</script>


<style scoped>
</style>
