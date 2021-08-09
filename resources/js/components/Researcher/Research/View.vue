<template>
    <div>
        <div class="row">
            <div class="col-xl-12">
                <div class="form-inline float-right">
                    <div data-toggle="tooltip" data-placement="bottom" data-original-title="Edit">
                        <button  @click="comment" type="button" class="btn btn-light waves-light waves-effect mr-2">
                        <i class='bx bx-comment-dots' ></i>
                        </button>
                    </div>
                    <div data-toggle="tooltip" data-placement="bottom" data-original-title="Edit">
                        <button @click="close('edit')" type="button" class="btn btn-light waves-light waves-effect mr-2">
                        <i class='bx bxs-edit'></i>
                        </button>
                    </div>
                    <div data-toggle="tooltip" data-placement="bottom" data-original-title="Back">
                        <button @click="close('back')" type="button" class="btn btn-light waves-light waves-effect mr-2">
                        <i class='bx bx-right-arrow-circle'></i>
                        </button>
                    </div>
                </div>
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle avatar-sm" :src="currentUrl+'/images/avatars/'+research.avatar" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="font-size-16 mt-1 mb-0">{{research.name}}</h5>
                        <small class="text-muted mt-0">{{research.email}}</small>
                    </div>
                </div>
                <h4 class="float-right font-size-16"><span class="font-size-12">Status:</span> <span :class="'badge badge-'+research.color">{{research.status}}</span></h4>
                <h4 class="mt-4 font-size-16">{{research.title}}</h4>
                <hr></hr>
                <span v-html="research.content"></span>
                <hr></hr>
            </div>
        </div>
        <div class="modal fade exampleModal" id="comment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <research-comment></research-comment>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            'research' : Object
        },
        data(){
            return {
                currentUrl: window.location.origin,
                errors: [],
            }
        },
        

        // created(){
        //     this.fetch();
        // },

        methods : {
            // fetch(){
            //     axios.get(this.currentUrl + '/request/researcher/research/'+this.research_id)
            //     .then(response => {
            //         this.research = response.data.data;
            //         vm.makePagination(response.data.meta, response.data.links);
            //     })
            //     .catch(err => console.log(err));
            // }

            close(type){
                if(type == 'back'){
                    this.$emit('status', true);
                }else{
                    this.$emit('status', type);
                }
                
            },

            comment(){
                $("#comment").modal('show');
            }
        }
    }
</script>
