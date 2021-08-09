<template>
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document" style="max-width: 1000px;">
        <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">View Profile</h5>
                <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mb-4">
                <div class="row">
                  

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
          
        },
        data(){
            return {
                currentUrl: window.location.origin,
                errors: [],
            }
        },
    
        methods : {
           
        }
    }
</script>
