<template>
    <div>
       <div class="row justify-content-center mt-4">
            <div class="col-md-8 mt-3">
                <b-card :title="book_details.name">
                    <b-card-text>
                        <p>{{book_details.description}}</p>
                        <p>{{book_details.content}}</p>
                    </b-card-text>
                    
                </b-card>
            </div>
       </div>
    </div>
</template>

<script>
export default {
    props: ['book_details'],
}
</script>