<template>
    <div>
       <div class="row mt-4">
            <div v-for="(book, index) in allBooks" :key="index" class="col-md-4 mt-3">
                <b-card :title="book.name">
                    <b-card-text>
                        {{book.description}}
                    </b-card-text>
                    <!-- <b-button :href="'view_book/'+book.id" variant="primary" size="sm">View</b-button> -->
                    <b-button :href="'edit_book/'+book.id" variant="primary" size="sm">Edit</b-button>
                    <b-button size="sm" variant="secondary" @click="$bvModal.show('modal'+book.id)"> Archive</b-button>
                    <b-button href="#" variant="danger" size="sm" @click="$bvModal.show('modal2'+book.id)">Delete</b-button>
                </b-card>
                <div>
                    <b-modal :id="'modal'+book.id" title="Archive Book" @ok="handleArchive(book.id)">
                        <p class="my-4">Are you sure you want to archive this book?</p>
                    </b-modal>
                    <b-modal :id="'modal2'+book.id" title="Archive Book" @ok="handleDelete(book.id)">
                        <p class="my-4">Are you sure you want to delete this book?</p>
                    </b-modal>
                </div>
            </div>
       </div>
    </div>
</template>

<script>
export default {
    props: ['my_books'],
    created(){
        this.allBooks = this.my_books.data;
    },
    data(){
        return {
            allBooks: [],
            modalShow: false
        }
    },
    methods:{
        handleArchive(id){
            // console.log(id);
            window.axios.post('/api/archive_book/'+id, id)
            .then(response => {
                console.log(response.data);
                if(response.status == 201){
                    Swal.fire({
                        title: "Congratulations!",
                        text: "You have successfully archived the book!",
                        icon: "success",
                        timer: 2000,
                    });
                    this.allBooks = this.allBooks.filter(allBooks => allBooks.id != id);
                    //this.modalShow = !this.modalShow;
                }
                else{
                    Swal.fire({
                        title: "Error!",
                        text: data,
                        icon: "error",
                    });
                }
            })
            .catch(err => {
                console.log(err);
            })
        },

         handleDelete(id){
            // console.log(id);
            window.axios.post('/api/delete_book/'+id, id)
            .then(response => {
                console.log(response.data);
                if(response.status == 201){
                    Swal.fire({
                        title: "Congratulations!",
                        text: "You have successfully deleted the book!",
                        icon: "success",
                        timer: 2000,
                    });
                    this.allBooks = this.allBooks.filter(allBooks => allBooks.id != id);
                    //this.modalShow = !this.modalShow;
                }
                else{
                    Swal.fire({
                        title: "Error!",
                        text: data,
                        icon: "error",
                    });
                }
            })
            .catch(err => {
                console.log(err);
            })
        }
    }
}
</script>