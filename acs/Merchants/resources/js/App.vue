<template>
      <div class="container">
      <h2>Add Marchant</h2>
      <form action="/merchant" method="post">
        <div class="form-group">
          <label for="uname">Store Name:</label>
          <input type="text" class="form-control" id="uname" placeholder="Enter username" name="sname" v-model="item.name" required>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
          <label for="pwd">Location:</label>
          <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="slocation" v-model="item.slocation" required>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
          <label for="pwd">Fixed Discount:</label>
          <input type="float" class="form-control" id="pwd" placeholder="Enter password" name="discount" v-model="item.discount" required>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember" required> I accept the Terms and Conditions .
            <div class="invalid-feedback">Check this checkbox to continue.</div>
          </label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: 'app',
    data(){
      return{
        lists: [],
        item: {
          sname:"",
          slocation:"",
          discount:""
        }
      }
    }
  
}
</script>