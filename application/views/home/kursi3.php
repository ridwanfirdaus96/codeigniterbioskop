<title>kursi</title>

<link rel="stylesheet" href="<?php echo base_url('custom/css/me.css');?>">

<div class="error"><?php echo validation_errors(); ?></div>
		<?php echo form_open('home/kursi2'); ?>

<div class="plane">
  <div class="cockpit">
    <h2>Please select a seat</h2>
  </div>
  <div class="exit exit--front fuselage">
    
  </div>
  <ol class="cabin fuselage">
    <li class="row row--1">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="1A" name="baris" value="<?php echo set_value('baris');?>" />
          <label for="1A">1A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1B"  name="baris" value="<?php echo set_value('baris');?>" />
          <label for="1B">1B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1C"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="1C">1C</label>
        </li>
        <li class="seat">
          <input type="checkbox" disabled id="1D"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="1D">Occupied</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1E"  name="baris" value="<?php echo set_value('baris');?>" />
          <label for="1E">1E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1F"  name="baris" value="<?php echo set_value('baris');?>" />
          <label for="1F">1F</label>
        </li>
      </ol>
    </li>
    <li class="row row--2">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="2A"  name="baris" value="<?php echo set_value('baris');?>" />
          <label for="2A">2A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2B"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="2B">2B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2C"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="2C">2C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2D"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="2D">2D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2E"  name="baris" value="<?php echo set_value('baris');?>" />
          <label for="2E">2E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2F"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="2F">2F</label>
        </li>
      </ol>
    </li>
    <li class="row row--3">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="3A"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="3A">3A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3B"  name="baris" value="<?php echo set_value('baris');?>" />
          <label for="3B">3B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3C"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="3C">3C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3D"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="3D">3D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3E"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="3E">3E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3F"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="3F">3F</label>
        </li>
      </ol>
    </li>
    <li class="row row--4">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="4A"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="4A">4A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4B"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="4B">4B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4C"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="4C">4C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4D"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="4D">4D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4E"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="4E">4E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4F"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="4F">4F</label>
        </li>
      </ol>
    </li>
    <li class="row row--5">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="5A"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="5A">5A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5B"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="5B">5B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5C"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="5C">5C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5D"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="5D">5D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5E"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="5E">5E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5F"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="5F">5F</label>
        </li>
      </ol>
    </li>
    <li class="row row--6">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="6A"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="6A">6A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6B"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="6B">6B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6C"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="6C">6C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6D"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="6D">6D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6E"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="6E">6E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6F"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="6F">6F</label>
        </li>
      </ol>
    </li>
    <li class="row row--7">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="7A"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="7A">7A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7B"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="7B">7B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7C"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="7C">7C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7D"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="7D">7D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7E"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="7E">7E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7F"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="7F">7F</label>
        </li>
      </ol>
    </li>
    <li class="row row--8">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="8A"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="8A">8A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8B"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="8B">8B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8C"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="8C">8C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8D"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="8D">8D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8E"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="8E">8E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8F"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="8F">8F</label>
        </li>
      </ol>
    </li>
    <li class="row row--9">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="9A"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="9A">9A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9B"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="9B">9B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9C"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="9C">9C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9D"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="9D">9D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9E"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="9E">9E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9F"   name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="9F">9F</label>
        </li>
      </ol>
    </li>
    <li class="row row--10">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="10A"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="10A">10A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10B"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="10B">10B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10C"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="10C">10C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10D"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="10D">10D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10E"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="10E">10E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10F"  name="baris" value="<?php echo set_value('baris');?>"/>
          <label for="10F">10F</label>
        </li>
      </ol>
    </li>
  </ol>
  <div class="exit exit--back fuselage">
    
  </div>
</div>
<style>
label {
  font-size: 0.8rem;
  color: #9e9e9e !important;
}
</style>

        <br> Total
        <input value="Rp. " readonly type="text" id="total" />
      
      <input type="submit" value="Order">
</form>
