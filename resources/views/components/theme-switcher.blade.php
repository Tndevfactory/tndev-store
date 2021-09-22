   <div class="btn-group " id="thema-switcher">

        <button class="btn  dropdown-toggle p-0 me-3" 
            type="button" 
            id="defaultDropdown" data-bs-toggle="dropdown" 
            data-bs-auto-close="true" aria-expanded="false">
           <i class="fas fa-cog" ></i>
        </button>

        <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
            <li class="px-2 py-0">
             
                <div class=" form-check form-switch  d-flex align-items-center  ">
  
                  <input class="form-check-input" 
                            type="checkbox" id="switcher"
                            {{ themeDark() ? 'checked' : '' }} 
                            title=" {{ themeDark() ? 'go light' : 'go dark' }}">

                    <label class="form-check-label ms-1" for="flexSwitchCheckDefault">
                             <span class="ms-1">Go dark</span>  
                    </label>
            
                </div>
            </li>
        </ul>

      
    </div>

    