        
        const menuicon = document.getElementById('menu-icon');
        const menubox = document.querySelector('.menubox');
        //display menubox on hover
        menuicon.addEventListener('mouseover', function()
        {
            menubox.style.display = 'block';
        });
        //hide menubar when click outside menuicon
        document.addEventListener('click', function(event)
        {
            if(!menuicon.contains(event.target) && !menubox.contains(event.target))
            {
                menubox.style.display = 'none';
            }
        });

        //edit form display
        const editProfileLink = document.getElementById('editProfileLink');
        const editprofileformsection = document.getElementById('edit-profile-form-section');
        const editform = document.getElementById('edit-form');
        const updateformclose = document.getElementById('update-form-close');
        editProfileLink.addEventListener('click', function(event)
        {
            event.preventDefault();
            editprofileformsection.style.display = 'flex';
            editform.style.display = 'flex';
            updateformclose.style.position = 'absolute';
            updateformclose.style.top = 0;
            updateformclose.style.right = 0;
            updateformclose.style.margin = '1.30rem';

        });
        updateformclose.addEventListener('click', function()
        {
            editprofileformsection.style.display = 'none';
            editform.style.display = 'none';
        });

        

        
        
        

        

        
  