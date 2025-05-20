<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUBG: BATTLEGROUNDS | Official Links</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
       
       body {
    background: linear-gradient(to bottom, 
                rgba(0, 0, 0, 0.980) 10%, 
                rgba(0, 0, 0, 0.74) 100%, 
                rgba(0, 0, 0, 0.74) 100%);
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    
    min-height: 100vh;
    color: white;
    font-family: 'IBM Plex Sans', sans-serif;
}

        
        .profile-img {
            width: 90px;
            height: 90px;
            object-fit: cover;
        }
        
        .link-card {
            background-color: #ffb900;
            color: #000;
            border: none;
            border-radius: 5px;
            transition: all 0.3s;
            font-weight: 600;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 17px 17px;
            margin-bottom: 10px;
            text-decoration: none !important;
        }
        
        .link-card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .link-card-content {
            display: flex;
            align-items: center;
            gap: 10px;
            width: 100%;
        }
        
        .link-card-text {
    
            flex-grow: 1;
        }
        
        .link-card i {
            color: #000;
            min-width: 20px;
        }
        
        .section-header {
            color: white;
            letter-spacing: 1px;
            font-size: 13px;
            font-weight: 700;
            margin: 20px 0 8px 0;
            text-transform: uppercase;
        }

        /* Share Modal Styles */
        .share-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.6);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }
        
        .share-modal-content {
            background: white;
            border-radius: 8px;
            width: 90%;
            max-width: 420px;
            max-height: 90vh;
            overflow-y: auto;
            color: black;
        }
        
        .share-preview {
            width: 280px;
            height: 280px; /* Membuat kotak persegi */
            background-color: rgb(59, 48, 42);
            border-radius: 8px;
            margin: 15px auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            cursor: pointer;
            background-color: rgb(59, 48, 42);
            border-radius: 8px;
            padding: 20px;
            margin: 0 auto;
            text-align: center;
            cursor: pointer;
            transition: transform 250ms ease-in-out, box-shadow 250ms ease-in-out;
        }
        
        
        .modal-url-text, 
.modal-desc-text {
    width: 100%;
    text-align: center;
    margin: 5px 0;
}

#modalImage {
    margin: 0 auto 15px; 
}
        .share-preview:hover {
            transform: scale(1.01);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .share-preview img {
            width: 100%;
            max-height: 120px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        
        .share-preview h3 {
            color: white;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .share-preview p {
            color: #ddd;
            font-size: 12px;
            margin-bottom: 5px;
        }
        
        .share-preview .url {
            color: #f8e074;
            font-size: 11px;
            word-break: break-all;
        }
        
        .share-platforms-container {
            position: relative;
            padding: 0 15px;
        }
        
        .share-platforms {
            display: flex;
            overflow-x: hidden;
            padding: 10px 0;
            gap: 15px;
            scroll-behavior: smooth;
        }
        
        .share-platform {
            width: 48px;
            height: 48px;
            margin: 0 6px;
            flex: 0 0 60px;
            text-align: center;
        }
        
        .share-platform-icon {
            width: 100%;
    height: 100%;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0; 
            border-radius: 50%;
            background: #e0e2d9;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            cursor: pointer;
        }
        
        .share-platform-icon svg {
            width: 60%; 
            height: 60%;
            max-width: 24px;
            max-height: 24px;
        }
        
        .share-platform-label {
            font-size: 12px;
            margin-top: 5px;
            white-space: nowrap;
        }
        
        .scroll-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 32px;
            height: 32px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
            cursor: pointer;
            z-index: 2;
        }
        
        .scroll-button.left {
            left: 5px;
        }
        
        .scroll-button.right {
            right: 5px;
        }
        
        
        .ellipsis-btn {
            background: none;
            border: none;
            color: #000;
            cursor: pointer;
            padding: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .ellipsis-btn .dot {
            width: 2px;
            height: 2px;
            background-color: #000;
            border-radius: 50%;
            margin: 1px 0;
        }
        
        
        .profile-share-btn {
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(26, 26, 26, 0.35);
            border: none;
            transition: all 0.5s ease;
        }
        
        .profile-share-btn:hover {
            background-color: rgba(26, 26, 26, 0.25);
        }
        
        .profile-share-btn:active {
            background-color: #808080;
        }
        
        .profile-share-btn svg {
            width: 16px;
            height: 16px;
        }
    </style>
</head>
<body>
    <div class="container text-center" style="max-width: 600px; padding-top: 50px;">
        
        <div class="mb-4 position-relative">
            <div style="position: absolute; right: 0; top: 0;">
                <button class="profile-share-btn" onclick="openProfileShareModal()" aria-label="Share profile">
                    <svg width="16" height="16" viewBox="0 0 16 16">
                        <path fill="white" stroke="white" d="M12.6661 7.33348C12.2979 7.33348 11.9994 7.63195 11.9994 8.00014C11.9994 8.36833 12.2979 8.66681 12.6661 8.66681C13.0343 8.66681 13.3328 8.36833 13.3328 8.00014C13.3328 7.63195 13.0343 7.33348 12.6661 7.33348Z"></path>
                        <path fill="white" stroke="white" d="M8.00057 7.33348C7.63238 7.33348 7.3339 7.63195 7.3339 8.00014C7.3339 8.36833 7.63238 8.66681 8.00057 8.66681C8.36876 8.66681 8.66724 8.36833 8.66724 8.00014C8.66724 7.63195 8.36876 7.33348 8.00057 7.33348Z"></path>
                        <path fill="white" stroke="white" d="M3.33333 7.33348C2.96514 7.33348 2.66667 7.63195 2.66667 8.00014C2.66667 8.36833 2.96514 8.66681 3.33333 8.66681C3.70152 8.66681 4 8.36833 4 8.00014C4 7.63195 3.70152 7.33348 3.33333 7.33348Z"></path>
                    </svg>
                </button>
            </div>
            
            <img src="https://ugc.production.linktr.ee/pRGqPUTSxCbgIpccNggN_86Cd4w31702n327d?io=true&size=avatar-v3_0" class="profile-img rounded-circle mb-3" alt="PUBG Logo">
            <h3 class="fw-bold mb-2" style="font-size: 20px;">PUBG</h3>
            <h3 class="fw-normal mb-2" style="font-size: 16px;">BATTLEGROUNDS</h3>
            <p class="text-muted small">Official Links</p>
            
           
<div class="d-flex justify-content-center gap-3" style="margin-top: -20px;">
    <!-- YouTube -->
    <a title="YouTube" target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/PUBG" 
       style="display: inline-flex; align-items: center; justify-content: center; width: 32px; height: 32px; transition: transform 0.2s ease; color: white;"
       onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12,20.55c-.3,0-7.279-.006-9.115-.5A3.375,3.375,0,0,1,.5,17.665,29.809,29.809,0,0,1,0,12,29.824,29.824,0,0,1,.5,6.334,3.375,3.375,0,0,1,2.885,3.948c1.836-.492,8.819-.5,9.115-.5s7.279.006,9.115.5A3.384,3.384,0,0,1,23.5,6.334,29.97,29.97,0,0,1,24,12a29.97,29.97,0,0,1-.5,5.666,3.384,3.384,0,0,1-2.388,2.386C19.279,20.544,12.3,20.55,12,20.55Zm0-16.1c-.072,0-7.146.006-8.857.464A2.377,2.377,0,0,0,1.464,6.593,29.566,29.566,0,0,0,1,12a29.566,29.566,0,0,0,.464,5.407,2.377,2.377,0,0,0,1.679,1.679c1.711.458,8.785.464,8.857.464s7.146-.006,8.857-.464a2.377,2.377,0,0,0,1.679-1.679A29.66,29.66,0,0,0,23,12a29.66,29.66,0,0,0-.464-5.407h0a2.377,2.377,0,0,0-1.679-1.679C19.146,4.456,12.071,4.45,12,4.45ZM9.7,15.95a.5.5,0,0,1-.5-.5V8.55a.5.5,0,0,1,.75-.433l5.975,3.45a.5.5,0,0,1,0,.866L9.95,15.883A.5.5,0,0,1,9.7,15.95Zm.5-6.534v5.168L14.675,12Z"></path>
        </svg>
    </a>

    <!-- Facebook -->
    <a title="Facebook" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/PUBG.battlegrounds.global" 
       style="display: inline-flex; align-items: center; justify-content: center; width: 32px; height: 32px; transition: transform 0.2s ease; color: white;"
       onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
            <path d="M23,12A11,11,0,1,0,10.279,22.865h0a11.08,11.08,0,0,0,3.436,0h0A10.952,10.952,0,0,0,23,12ZM10.859,21.935v-6.9a.5.5,0,0,0-.5-.5H8.193V12.5h2.166a.5.5,0,0,0,.5-.5V9.686c0-2.278,1.264-3.585,3.459-3.585a15.392,15.392,0,0,1,1.858.137V7.89h-.824l-.019,0a2,2,0,0,0-2.181,1.735,1.8,1.8,0,0,0-.011.4V12a.5.5,0,0,0,.5.5H15.97l-.312,2.035H13.641a.5.5,0,0,0-.5.5v6.9A10.124,10.124,0,0,1,10.859,21.935Zm3.282-.166V15.535h1.946a.5.5,0,0,0,.5-.425l.465-3.035a.5.5,0,0,0-.494-.575H14.141V10.016a1.267,1.267,0,0,1,.308-.821,1.218,1.218,0,0,1,.9-.3h1.324a.5.5,0,0,0,.5-.5V5.806a.5.5,0,0,0-.42-.494A16.661,16.661,0,0,0,14.325,5.1c-2.754,0-4.466,1.757-4.466,4.585V11.5H7.693a.5.5,0,0,0-.5.5v3.035a.5.5,0,0,0,.5.5H9.859v6.234a10,10,0,1,1,4.282,0Z"></path>
        </svg>
    </a>

    <!-- Instagram -->
    <a title="Instagram" target="_blank" rel="noopener noreferrer" href="https://instagram.com/pubg_battlegrounds_global" 
       style="display: inline-flex; align-items: center; justify-content: center; width: 32px; height: 32px; transition: transform 0.2s ease; color: white;"
       onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
            <path d="M21.938,7.71a7.329,7.329,0,0,0-.456-2.394,4.615,4.615,0,0,0-1.1-1.694,4.61,4.61,0,0,0-1.7-1.1,7.318,7.318,0,0,0-2.393-.456C15.185,2.012,14.817,2,12,2s-3.185.012-4.29.062a7.329,7.329,0,0,0-2.394.456,4.615,4.615,0,0,0-1.694,1.1,4.61,4.61,0,0,0-1.1,1.7A7.318,7.318,0,0,0,2.062,7.71C2.012,8.814,2,9.182,2,12s.012,3.186.062,4.29a7.329,7.329,0,0,0,.456,2.394,4.615,4.615,0,0,0,1.1,1.694,4.61,4.61,0,0,0,1.7,1.1,7.318,7.318,0,0,0,2.393.456c1.1.05,1.472.062,4.29.062s3.186-.012,4.29-.062a7.329,7.329,0,0,0,2.394-.456,4.9,4.9,0,0,0,2.8-2.8,7.318,7.318,0,0,0,.456-2.393c.05-1.1.062-1.472.062-4.29S21.988,8.814,21.938,7.71Zm-1,8.534a6.351,6.351,0,0,1-.388,2.077,3.9,3.9,0,0,1-2.228,2.229,6.363,6.363,0,0,1-2.078.388C15.159,20.988,14.8,21,12,21s-3.159-.012-4.244-.062a6.351,6.351,0,0,1-2.077-.388,3.627,3.627,0,0,1-1.35-.879,3.631,3.631,0,0,1-.879-1.349,6.363,6.363,0,0,1-.388-2.078C3.012,15.159,3,14.8,3,12s.012-3.159.062-4.244A6.351,6.351,0,0,1,3.45,5.679a3.627,3.627,0,0,1,.879-1.35A3.631,3.631,0,0,1,5.678,3.45a6.363,6.363,0,0,1,2.078-.388C8.842,3.012,9.205,3,12,3s3.158.012,4.244.062a6.351,6.351,0,0,1,2.077.388,3.627,3.627,0,0,1,1.35.879,3.631,3.631,0,0,1,.879,1.349,6.363,6.363,0,0,1,.388,2.078C20.988,8.841,21,9.2,21,12S20.988,15.159,20.938,16.244Z"></path>
            <path d="M17.581,5.467a.953.953,0,1,0,.952.952A.954.954,0,0,0,17.581,5.467Z"></path>
            <path d="M12,7.073A4.927,4.927,0,1,0,16.927,12,4.932,4.932,0,0,0,12,7.073Zm0,8.854A3.927,3.927,0,1,1,15.927,12,3.932,3.932,0,0,1,12,15.927Z"></path>
        </svg>
    </a>

    <!-- TikTok -->
    <a title="TikTok" target="_blank" rel="noopener noreferrer" href="https://tiktok.com/@pubg" 
       style="display: inline-flex; align-items: center; justify-content: center; width: 32px; height: 32px; transition: transform 0.2s ease; color: white;"
       onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
            <path d="M9.37,23.5a7.468,7.468,0,0,1,0-14.936.537.537,0,0,1,.538.5v3.8a.542.542,0,0,1-.5.5,2.671,2.671,0,1,0,2.645,2.669.432.432,0,0,1,0-.05V1a.5.5,0,0,1,.5-.5h3.787a.5.5,0,0,1,.5.5A4.759,4.759,0,0,0,21.59,5.76a.5.5,0,0,1,.5.5L22.1,10a.533.533,0,0,1-.519.515,9.427,9.427,0,0,1-4.741-1.268v6.789A7.476,7.476,0,0,1,9.37,23.5ZM8.908,9.585a6.466,6.466,0,1,0,6.93,6.447V8.326a.5.5,0,0,1,.791-.407A8.441,8.441,0,0,0,21.1,9.5l-.006-2.76A5.761,5.761,0,0,1,15.859,1.5H13.051V16.032a.458.458,0,0,1,0,.053,3.672,3.672,0,1,1-4.14-3.695Z"></path>
        </svg>
    </a>

    <!-- X (Twitter) -->
    <a title="X" target="_blank" rel="noopener noreferrer" href="https://x.com/PUBG" 
       style="display: inline-flex; align-items: center; justify-content: center; width: 32px; height: 32px; transition: transform 0.2s ease; color: white;"
       onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
            <path d="m2.538 3 7.425 9.928L2 21h1.5l7.033-7.067L16 21h5.232l-7.662-9.995 6.955-7.514h-1.5L13 10 7.77 3H2.538Zm1.994 1h2.645l12.087 16h-2.525L4.532 4Z"></path>
        </svg>
    </a>

    <!-- Discord -->
  
<a title="Discord" target="_blank" rel="noopener noreferrer" href="https://discord.com/invite/battlegrounds" 
   style="display: inline-flex; align-items: center; justify-content: center; width: 32px; height: 32px; transition: transform 0.2s ease; color: white;"
   onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
    <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
        <path d="M6.613 6.27a.5.5 0 1 0 .274.96l-.274-.96Zm10.5.96a.5.5 0 0 0 .274-.96l-.274.96ZM6.304 16.77a.5.5 0 0 0-.275.96l.275-.96Zm11.667.96a.5.5 0 1 0-.275-.96l.275.96Zm-1.388.103a.5.5 0 1 0-1 0h1Zm5.917 0 .447.224a.495.495 0 0 0 .017-.038l-.464-.186ZM20.75 4.417l.471-.167a.5.5 0 0 0-.185-.244l-.286.41Zm-5.25-1.75.053-.497a.5.5 0 0 0-.517.311l.464.186Zm-1.63 2.73a.5.5 0 1 0 .928.372l-.929-.371ZM8.416 17.834a.5.5 0 0 0-1 0h1Zm-6.526 0-.467.178c.004.013.01.025.015.037l.452-.215ZM3.557 4.417l-.295-.404a.5.5 0 0 0-.18.245l.475.159ZM8.5 2.667l.464-.186a.5.5 0 0 0-.519-.311l.055.497Zm.702 3.102a.5.5 0 1 0 .929-.371l-.929.371ZM9.167 12a.667.667 0 0 1-.667.667v1c.92 0 1.667-.746 1.667-1.667h-1Zm-.667.667A.667.667 0 0 1 7.833 12h-1c0 .92.747 1.667 1.667 1.667v-1ZM7.833 12c0-.368.299-.667.667-.667v-1c-.92 0-1.667.747-1.667 1.667h1Zm.667-.667c.368 0 .667.299.667.667h1c0-.92-.747-1.667-1.667-1.667v1Zm7.667.667a.667.667 0 0 1-.667.667v1c.92 0 1.667-.746 1.667-1.667h-1Zm-.667.667a.667.667 0 0 1-.667-.667h-1c0 .92.746 1.667 1.667 1.667v-1ZM14.833 12c0-.368.299-.667.667-.667v-1c-.92 0-1.667.747-1.667 1.667h1Zm.667-.667c.368 0 .667.299.667.667h1c0-.92-.747-1.667-1.667-1.667v1ZM6.887 7.231c2.018-.577 3.573-.856 5.113-.856 1.54 0 3.095.28 5.113.856l.274-.962c-2.065-.59-3.719-.894-5.387-.894-1.668 0-3.322.304-5.387.894l.274.962Zm-.858 10.5c4.173 1.192 7.769 1.192 11.942 0l-.275-.962c-3.994 1.141-7.398 1.141-11.392 0l-.275.962Zm9.554.102c0 .398.144.84.327 1.246.189.416.442.844.712 1.229.268.383.562.738.837 1.003.137.131.28.251.421.341.127.081.318.181.537.181v-1c.073 0 .082.028 0-.024a1.822 1.822 0 0 1-.264-.219 6.027 6.027 0 0 1-.712-.856 6.848 6.848 0 0 1-.62-1.068c-.163-.36-.238-.647-.238-.833h-1Zm2.834 4c1.061 0 2.006-.585 2.753-1.307.755-.728 1.369-1.653 1.777-2.469l-.894-.447c-.37.74-.922 1.564-1.578 2.197-.662.64-1.37 1.026-2.058 1.026v1Zm4.547-3.814c.435-1.087.57-2.887.325-5.197-.248-2.329-.89-5.235-2.068-8.572l-.942.333c1.155 3.275 1.777 6.105 2.016 8.345.24 2.26.084 3.862-.26 4.72l.93.371ZM21.036 4.006c-1.8-1.254-3.699-1.646-5.483-1.836l-.106.994c1.716.183 3.418.549 5.017 1.663l.572-.82Zm-6-1.525-1.167 2.917.929.371 1.166-2.917-.928-.37Zm-7.62 15.352c0 .196-.07.49-.218.85-.144.35-.344.725-.563 1.07-.22.345-.451.645-.649.852-.1.105-.18.174-.238.213-.073.05-.054.015.031.015v1c.225 0 .415-.108.534-.19.135-.092.27-.214.396-.347.255-.267.524-.623.769-1.006.245-.385.475-.813.645-1.228.167-.405.294-.84.294-1.229h-1Zm-1.637 3c-.638 0-1.304-.377-1.935-1.017-.623-.632-1.149-1.457-1.502-2.198l-.903.43c.388.815.973 1.74 1.693 2.47.71.72 1.618 1.315 2.647 1.315v-1Zm-3.42-3.178c-.33-.861-.478-2.469-.249-4.73.228-2.242.82-5.073 1.92-8.349l-.947-.318c-1.12 3.335-1.732 6.24-1.967 8.567-.234 2.308-.105 4.104.308 5.186l.934-.356ZM3.851 4.82c1.52-1.111 3.049-1.474 4.703-1.656l-.11-.994c-1.74.191-3.465.587-5.183 1.843l.59.807Zm4.184-1.968L9.202 5.77l.929-.371L8.964 2.48l-.928.371Z"></path>
    </svg>
</a>

    <!-- Twitch -->
    <a title="Twitch" target="_blank" rel="noopener noreferrer" href="https://www.twitch.tv/pubg_battlegrounds" 
       style="display: inline-flex; align-items: center; justify-content: center; width: 32px; height: 32px; transition: transform 0.2s ease; color: white;"
       onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
            <path d="M7.285,23.5a.493.493,0,0,1-.191-.038A.5.5,0,0,1,6.785,23V19.571H2.572a.5.5,0,0,1-.5-.5V4.929a.5.5,0,0,1,.146-.354L6.147.646A.5.5,0,0,1,6.5.5H21.429a.5.5,0,0,1,.5.5V12a.5.5,0,0,1-.147.354L14.71,19.425a.5.5,0,0,1-.353.146H11.421L7.639,23.354A.5.5,0,0,1,7.285,23.5ZM3.072,18.571H7.285a.5.5,0,0,1,.5.5v2.722l3.076-3.075a.5.5,0,0,1,.353-.147H14.15l6.779-6.778V1.5H6.707L3.072,5.136Z"></path>
            <path d="M10.822,17.607a.494.494,0,0,1-.192-.038.5.5,0,0,1-.308-.462v-2.25H7.285a.5.5,0,0,1-.5-.5V3.571a.5.5,0,0,1,.5-.5H18.857a.5.5,0,0,1,.5.5v7.643a.5.5,0,0,1-.147.354L16.068,14.71a.5.5,0,0,1-.354.147H13.779l-2.6,2.6A.5.5,0,0,1,10.822,17.607Zm-3.037-3.75h3.037a.5.5,0,0,1,.5.5V15.9l1.9-1.9a.5.5,0,0,1,.354-.146h1.935l2.85-2.85V4.071H7.785Z"></path>
            <path d="M15.857,10.386a.5.5,0,0,1-.5-.5V6.072a.5.5,0,1,1,1,0V9.886A.5.5,0,0,1,15.857,10.386Z"></path>
            <path d="M12.357,10.386a.5.5,0,0,1-.5-.5V6.072a.5.5,0,1,1,1,0V9.886A.5.5,0,0,1,12.357,10.386Z"></path>
        </svg>
    </a>
</div>
                
        </div>

      
        <div class="mb-1">
            <!-- Official Website -->
            <a href="https://pubg.com/en" class="link-card">
                <div class="link-card-content">
                    <div class="link-thumbnail" style="width: 35px; height: 35px; border-radius: 4px; overflow: hidden;">
                        <img src="D:\User PC\Documents\FED5026231126\ylxYsDYTzaZQ3q4dsV5p_img-og-pubg (2).jpg" 
                             alt="PUBG Official Website" 
                             style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                    </div>
                    <div class="link-card-text">Official Website</div>
                </div>
                <button class="ellipsis-btn" onclick="event.stopPropagation(); openShareModal('Official Website', 'https://pubg.com/en', 'https://ugc.production.linktr.ee/ylxYsDYTzaZQ3q4dsV5p_img-og-pubg.jpg', 'BATTLEGROUNDS official website')">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </button>
            </a>

           

            <!-- NEW UPDATES & EVENTS -->
            <p class="section-header">🎁NEW UPDATES & EVENTS🎁</p>
            
            <a href="https://pubg.com/en/news/8276" class="link-card">
                <div class="link-card-content">
                  
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2" fill="none" />
                    <line x1="7" y1="8" x2="17" y2="8" />
                    <line x1="7" y1="12" x2="17" y2="12" />
                    <line x1="7" y1="16" x2="13" y2="16" />
                  </svg>
                  
                  <div class="link-card-text">Patch Notes - Update 35.1</div>
                </div>
                <button class="ellipsis-btn" onclick="event.stopPropagation(); openShareModal('Patch Notes - Update 34.2', 'https://pubg.com/en/news/8276', 'https://wstatic-prod-boc.krafton.com/common/content/news/20250310/zC84xzQn.jpg', 'Introducing Update 34.2: Discover all the latest features and improvements!')">
                  <div class="dot"></div>
                  <div class="dot"></div>
                  <div class="dot"></div>
                </button>
              </a>
            </p>


            <a href="https://pubg.com/events/notice" class="link-card">
                <div class="link-card-content">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3" y="4" width="18" height="17" stroke="black" stroke-width="2" fill="transparent"/>
                    <line x1="7" y1="2" x2="7" y2="6" stroke="black" stroke-width="2"/>
                    <line x1="17" y1="2" x2="17" y2="6" stroke="black" stroke-width="2"/>
                    <line x1="3" y1="9" x2="21" y2="9" stroke="black" stroke-width="2"/>
                    <rect x="5" y="13" width="3" height="3" fill="black"/>
                  </svg>
                  <div class="link-card-text">Ongoing Events</div>
                </div>
                <button class="ellipsis-btn" onclick="event.stopPropagation(); openShareModal('Ongoing Events', 'https://pubg.com/events/notice', 'https://wstatic-prod.pubg.com/web/live/static/og/img-og-pubg.jpg', 'Get exclusive rewards only available from special events in PUBG: BATTLEGROUNDS', 'https://pubg.com/events/notice')">
                  <div class="dot"></div>
                  <div class="dot"></div>
                  <div class="dot"></div>
                </button>
              </a>
              


              <a href="https://pubg.com/ko/events/wwrdevent" class="link-card">
                <div class="link-card-content">
                    <div class="icon-container">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 21l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.18L12 21z"/>
                          </svg>
                          
                
                    </div>
                    <div class="link-card-text">PLAY Winner Winner Romantic Dinner</div>
                  </div>
                <button class="ellipsis-btn" onclick="event.stopPropagation(); openShareModal('PLAY Winner Winner Romantic Dinner', 'https://pubg.com/ko/events/wwrdevent', 'https://wstatic-prod.pubg.com/web/live/static/og/img-og-relu.jpg', '우린 마치 출구 없는 자기장처럼♥', 'https://pubg.com/ko/events/wwrdevent', '내 마음을 파밍한 그녀들, 지금 썸타러 가기!')">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </button>
            </a>
            
           
            <p class="section-header">Support</p>
            <!-- SUPPORT -->
            <a href="https://support.pubg.com/hc/en-us" class="link-card">
                <div class="link-card-content">
                  <svg class="support-icon" xmlns="http://www.w3.org/2000/svg" width="28" height="34" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 2-3 4" />
                    <line x1="12" y1="17" x2="12.01" y2="17" />
                  </svg>
                  <div class="link-card-text">Player Support</div>
                </div>
                <button class="ellipsis-btn" onclick="event.stopPropagation(); openShareModal('Player Support', 'https://support.pubg.com/hc/en-us', 'https://assets.production.linktr.ee/128a9cceafaabafd126f4c53dd8133db4ed5dfac/icons/tabler-icons/help.svg', '', 'https://support.pubg.com/hc/en-us')">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </button>
            </a>

              
              

            <!-- PLAY FREE NOW -->
            <p class="section-header">PLAY FREE NOW🪂</p>
            
            <a href="https://store.steampowered.com/app/578080/PUBG_BATTLEGROUNDS/?gsid=1ed8ee7fff2e6382932d7eb5b21cd3ca&gsc=1&gclid=CjwKCAjwitShBhA6EiwAq3RqA-EuZnGHKs4TDvnsFk4X-2KHNfnRce92gjgh35CgsQ-i425DqPhTtxoCb9UQAvD_BwE" class="link-card">
                <div class="link-card-content">
                    <i class="fab fa-steam" style="font-size: 28px;"></i>
                    <div class="link-card-text">Steam</div>
                </div>
                <button class="ellipsis-btn" onclick="event.stopPropagation(); openShareModal('PUBG on Steam', 'https://store.steampowered.com/app/578080/PUBG_BATTLEGROUNDS/?gsid=1ed8ee7fff2e6382932d7eb5b21cd3ca&gsc=1&gclid=CjwKCAjwitShBhA6EiwAq3RqA-EuZnGHKs4TDvnsFk4X-2KHNfnRce92gjgh35CgsQ-i425DqPhTtxoCb9UQAvD_BwE', 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/578080/5e4c43423a2ec1a45717eda38eb603da72df7e47/capsule_616x353.jpg?t=1743471348', 'PUBG: BATTLEGROUNDS, the high-stakes winner-take-all shooter that started the Battle Royale craze, is free-to-play! Drop into diverse maps, loot unique weapons and supplies, and survive in an ever-shrinking zone where every turn could be your last.', 'https://store.steampowered.com/app/578080/PUBG_BATTLEGROUNDS/?gsid=1ed8ee7fff2e6382932d7eb5b21cd3ca&gsc=1&gclid=CjwKCAjwitShBhA6EiwAq3RqA-EuZnGHKs4TDvnsFk4X-2KHNfnRce92gjgh35CgsQ-i425DqPhTtxoCb9UQAvD_BwE')">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </button>
            </a>
            
            <a href="https://store.playstation.com/en-us/product/UP5082-CUSA14081_00-PTSBUN0000000000" class="link-card">
                <div class="link-card-content">
                    <i class="fab fa-playstation" style="font-size: 28px;"></i>
                    <div class="link-card-text">PlayStation</div>
                </div>
                <button class="ellipsis-btn" onclick="event.stopPropagation(); openShareModal('PUBG on PlayStation', 'https//store.playstation.com/en-us/product/UP5082-CUSA14081_00-PTSBUN0000000000', 'https://ugc.production.linktr.ee/WyaMXUYBQSOeLCcSZOy1_playstation.png', '', 'https://store.playstation.com/en-us/product/UP5082-CUSA14081_00-PTSBUN0000000000')">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </button>
            </a>
            
            <a href="https://www.xbox.com/en-US/games/store/pubg-battlegrounds/C0MN5DN8KR3F" class="link-card">
                <div class="link-card-content">
                    <i class="fab fa-xbox" style="font-size: 28px;"></i>
                    <div class="link-card-text">Xbox</div>
                </div>
                <button class="ellipsis-btn" onclick="event.stopPropagation(); openShareModal('PUBG on Xbox', 'https://www.xbox.com/en-US/games/store/pubg-battlegrounds/C0MN5DN8KR3F', 'https://ugc.production.linktr.ee/ofK024SpQue6hchB1R07_xbox.png', '', 'https://www.xbox.com/en-US/games/store/pubg-battlegrounds/C0MN5DN8KR3F')">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </button>
            </a>
            
            <a href="https://store.epicgames.com/en-US/p/pubg-59c1d9" class="link-card">
                <div class="link-card-content">
                   
                    <div style="width: 32px; height: 32px; min-width: 36px; display: flex; align-items: center; justify-content: flex-start; margin-right: 6px; margin-left: -4px;">
                        <img src="https://ugc.production.linktr.ee/fumSKy3RMuWv4YzrJyeg_epicgames.png" 
                             alt="Epic Games Logo" 
                             style="width: 36px; height: 36px; object-fit: contain;">
                    </div>
                    <div class="link-card-text" style="flex: 1; padding-left: 4px;">Epic Games</div>
                </div>
                <button class="ellipsis-btn">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </button>
            </a>
            

            <a href="https://open.spotify.com/intl-id/artist/58596lUL65umS7uDFWsTdB?si=bhn2yqVoS4muJ9F_Ly3-ZQ&nd=1&dlsi=9c5c52ae30ff44ff" class="link-card">
                <div class="link-card-content" style="display: flex; align-items: center;">
                    
                    <div style="margin-right: 8px; margin-left: -3px;"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 30px; height: 36px;">
                            <circle cx="12" cy="12" r="11" stroke="black" stroke-width="2.25" fill="transparent"/>
                            <path fill="none" stroke="black" stroke-width="1.8" stroke-linecap="round"
                                  d="M8 15.2c2.5-1 6.5-1 9 0"/>
                            <path fill="none" stroke="black" stroke-width="2.2" stroke-linecap="round"
                                  d="M6.5 12c3.5-1.5 9-1.5 12.5 0"/>
                            <path fill="none" stroke="black" stroke-width="2.6" stroke-linecap="round"
                                  d="M5 8.8c4.5-2 11-2 15.5 0"/>
                        </svg>
                    </div>
                    <div class="link-card-text" style="flex-grow: 1;">Spotify Playlist</div>
                </div>
                <button class="ellipsis-btn" onclick="event.stopPropagation(); openShareModal('PUBG Spotify Playlist', 'https://open.spotify.com/intl-id/artist/58596lUL65umS7uDFWsTdB?si=bhn2yqVoS4muJ9F_Ly3-ZQ&nd=1&dlsi=9c5c52ae30ff44ff', 'https://i.scdn.co/image/ab6761610000e5ebdf2393c2a526ba53dbe89df9', '7K monthly listeners.', 'https://open.spotify.com/intl-id/artist/58596lUL65umS7uDFWsTdB?si=bhn2yqVoS4muJ9F_Ly3-ZQ&nd=1&dlsi=9c5c52ae30ff44ff')">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </button>
            </a>
        </div>

        
        

      
        <p class="text-muted small mt-4">* Bergabung dengan pubg_battlegrounds di Linktree</p>
      
<div class="text-center" style="margin-top: -30px; margin-bottom: 70px; padding: 0 15px;">
    <a href="https://linktr.ee/?utm_source=linktree&utm_medium=profile&utm_campaign=footer_logo_cta&utm_content=pubg_battlegrounds" 
       target="_blank" 
       rel="noopener noreferrer"
       style="display: inline-flex; 
              align-items: center; 
              justify-content: center;
              padding: 12px 24px;
              background-color: rgba(255, 255, 255, 0.9);
              border-radius: 50px;
              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
              text-decoration: none;
              font-family: 'IBM Plex Sans', sans-serif;
              font-weight: 600;
              color: #000;
              transition: all 0.3s ease;
              max-width: 420px;
              width: 100%;
              border: none;
              outline: none;">
        <span style="margin-right: 8px; display: flex; align-items: center;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 25" height="16" width="16" style="display: block;">
                <path d="M13.5108 5.85343L17.5158 1.73642L19.8404 4.11701L15.6393 8.12199H21.5488V11.4268H15.6113L19.8404 15.5345L17.5158 17.8684L11.7744 12.099L6.03299 17.8684L3.70842 15.5438L7.93745 11.4361H2V8.12199H7.90944L3.70842 4.11701L6.03299 1.73642L10.038 5.85343V0H13.5108V5.85343ZM10.038 16.16H13.5108V24.0019H10.038V16.16Z" fill="#000000"></path>
            </svg>
        </span>
        <span style="white-space: nowrap;">Bergabung dengan pubg_battlegrounds di Linktree</span>
    </a>
</div>
    </div>

  
    <div id="shareModal" class="share-modal">
        <div class="share-modal-content">
            <div style="padding: 15px; position: relative;">
                <div style="display: flex; justify-content: center; align-items: center;">
                    <h5 style="font-weight: 600;">Share link</h5>
                </div>
                <button onclick="closeShareModal()" style="position: absolute; right: 15px; top: 15px; background: none; border: none; cursor: pointer;">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M13.354 3.354 13.707 3 13 2.293l-.354.353zM2.647 12.647 2.293 13l.707.707.354-.353zm.707-10L3 2.292 2.293 3l.354.354zm9.293 10.707.353.353.707-.707-.353-.354zm0-10.708-10 10 .707.708 10-10zm-10 .708 10 10 .707-.707-10-10z" fill="currentColor"></path>
                    </svg>
                </button>
            </div>
            
            <div class="share-preview" id="sharePreviewClickable">
                <img src="" alt="Preview Image" id="modalImage">
                <h3 id="modalTitle"></h3>
                <p id="modalDesc"></p>
                <p class="url" id="modalUrl"></p>
                <p id="modalExtraDesc"></p>
            </div>
            
            <div class="share-platforms-container">
                <div class="scroll-button left" onclick="scrollPlatforms(-1)">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                
                <div class="share-platforms" id="sharePlatforms">
                    <div class="share-platform">
                        <div class="share-platform-icon" onclick="copyToClipboard()">
                            <svg viewBox="0 0 24 24">
                                <path d="m23.863 18.214-.422.489-.757-.654.434-.503.025-.027a5.19 5.19 0 1 1 7.337 7.34l-.025.023-.5.435-.657-.755.487-.423a4.19 4.19 0 0 0-5.922-5.925m3.654 2.975-.354.354-5.626 5.626-.353.353-.708-.707.354-.353 5.626-5.627.354-.353zm-8.81 2.25-.481.425a4.16 4.16 0 0 0 .01 5.91 4.25 4.25 0 0 0 5.953.026l.349-.47.802.597-.372.5-.05.058a5.25 5.25 0 0 1-7.385 0 5.16 5.16 0 0 1 0-7.342l.02-.02.491-.433z" fill="#000"></path>
                            </svg>
                        </div>
                        <div class="share-platform-label">Copy link</div>
                    </div>
                    
                    <div class="share-platform">
                        <a class="share-platform-icon" href="#" target="_blank" id="twitterShare">
                            <svg viewBox="0 0 24 24">
                                <path d="M11.559 12.251L20.825 25.1736L11.5 35.6775H13.6L21.763 26.4794L28.359 35.6786H35.5L25.712 22.029L34.392 12.25H32.293L24.775 20.7211L18.7 12.251H11.559ZM14.645 13.8625H17.925L32.413 34.0661H29.133L14.644 13.8635L14.645 13.8625Z" fill="#000"></path>
                            </svg>
                        </a>
                        <div class="share-platform-label">X</div>
                    </div>
                    
                    <div class="share-platform">
                        <a class="share-platform-icon" href="#" target="_blank" id="facebookShare">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="12" fill="#1877F2"></circle>
                                <path d="M18 12a6 6 0 1 0-12 0 6 6 0 0 0 5.063 5.928v-4.193H9.539V12h1.524v-1.322c0-1.503.895-2.334 2.266-2.334.656 0 1.343.117 1.343.117v1.477h-.757c-.745 0-.977.463-.977.937V12h1.664l-.267 1.735h-1.398v4.193A6 6 0 0 0 18 12" fill="#fff"></path>
                            </svg>
                        </a>
                        <div class="share-platform-label">Facebook</div>
                    </div>
                    
                    <div class="share-platform">
                        <a class="share-platform-icon" href="#" target="_blank" id="whatsappShare">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="12" fill="#00E676"></circle>
                                <path d="M16.201 7.746a5.9 5.9 0 0 0-4.205-1.745c-3.276 0-5.945 2.669-5.948 5.945 0 1.049.274 2.07.793 2.973L6 18.001l3.153-.826a5.95 5.95 0 0 0 2.843.724h.003c3.275 0 5.944-2.669 5.947-5.948A5.92 5.92 0 0 0 16.2 7.746m-4.205 9.146c-.89 0-1.76-.24-2.518-.69l-.18-.108-1.87.49.5-1.824-.118-.188a4.9 4.9 0 0 1-.755-2.63 4.95 4.95 0 0 1 4.944-4.937c1.32 0 2.56.516 3.495 1.448a4.92 4.92 0 0 1 1.445 3.496 4.95 4.95 0 0 1-4.943 4.943m2.711-3.7a27 27 0 0 0-1.015-.485c-.137-.049-.236-.074-.334.074-.1.148-.384.485-.47.582-.085.1-.174.11-.322.037s-.627-.231-1.195-.739a4.5 4.5 0 0 1-.827-1.029c-.085-.148-.008-.228.066-.302.066-.066.148-.174.223-.26.074-.085.1-.148.148-.248s.025-.185-.012-.259-.333-.807-.459-1.103c-.12-.291-.242-.251-.333-.254C10.09 9.2 9.99 9.2 9.892 9.2c-.1 0-.26.037-.397.185-.136.149-.519.508-.519 1.24 0 .733.534 1.438.608 1.537.074.1 1.046 1.6 2.537 2.244.354.154.63.245.847.314.356.114.678.097.935.06.285-.043.878-.36 1.004-.707.122-.348.122-.645.085-.707-.037-.063-.137-.1-.285-.174" fill="#fff"></path>
                            </svg>
                        </a>
                        <div class="share-platform-label">WhatsApp</div>
                    </div>
                    
                    <div class="share-platform">
                        <a class="share-platform-icon" href="#" target="_blank" id="linkedinShare">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="12" fill="#0A66C2"></circle>
                                <path d="M8.656 10.132h-2.46V18h2.46zm.221-2.705A1.417 1.417 0 0 0 7.47 6h-.044a1.426 1.426 0 0 0 0 2.852A1.416 1.416 0 0 0 8.877 7.47zM18 13.22c0-2.365-1.505-3.285-3-3.285a2.8 2.8 0 0 0-2.488 1.269h-.07v-1.072h-2.31V18h2.458v-4.186a1.633 1.633 0 0 1 1.476-1.76h.093c.782 0 1.362.492 1.362 1.731V18h2.46z" fill="#fff"></path>
                            </svg>
                        </a>
                        <div class="share-platform-label">LinkedIn</div>
                    </div>
                    
                    <div class="share-platform">
                        <a class="share-platform-icon" href="#" target="_blank" id="messengerShare">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="12" fill="#F1F1F1"></circle>
                                <path d="M12 6.002c-3.38 0-6 2.476-6 5.82 0 1.75.717 3.26 1.884 4.305a.48.48 0 0 1 .162.342l.032 1.067a.48.48 0 0 0 .674.424l1.19-.525a.48.48 0 0 1 .321-.024c.547.15 1.13.23 1.737.23 3.38 0 6-2.475 6-5.82 0-3.343-2.62-5.82-6-5.82" fill="url(#paint0_radial_657_559)"></path>
                                <path d="m8.397 13.524 1.762-2.796a.9.9 0 0 1 1.302-.24l1.402 1.05a.36.36 0 0 0 .433 0L15.19 10.1c.252-.192.582.11.413.379l-1.763 2.796a.9.9 0 0 1-1.301.24l-1.402-1.051a.36.36 0 0 0-.434.001L8.81 13.903c-.252.191-.582-.11-.413-.38" fill="#fff"></path>
                                <defs>
                                    <radialGradient id="paint0_radial_657_559" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(8.3 17.9) scale(13 13)">
                                        <stop stop-color="#0099FF"></stop>
                                        <stop offset="0.6" stop-color="#A033FF"></stop>
                                        <stop offset="0.93" stop-color="#FF5280"></stop>
                                        <stop offset="1" stop-color="#FF7061"></stop>
                                    </radialGradient>
                                </defs>
                            </svg>
                        </a>
                        <div class="share-platform-label">Messenger</div>
                    </div>
                    
                    <div class="share-platform">
                        <a class="share-platform-icon" href="#" target="_blank" id="snapchatShare">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="12" fill="#FFFC00"></circle>
                                <path fill="#fff" d="M18.78 15.392c-.058-.193-.337-.329-.337-.329l-.07-.036a5.4 5.4 0 0 1-1.224-.802 4.2 4.2 0 0 1-.71-.809 3 3 0 0 1-.391-.806c-.026-.104-.022-.146 0-.2a.3.3 0 0 1 .097-.11c.157-.111.41-.275.565-.375.135-.087.25-.162.318-.21.218-.152.368-.308.456-.476a.82.82 0 0 0 .039-.69c-.12-.317-.416-.505-.792-.505q-.126 0-.255.027c-.216.047-.42.124-.59.19a.018.018 0 0 1-.026-.018c.019-.423.04-.992-.008-1.533a3.8 3.8 0 0 0-.307-1.26 3.4 3.4 0 0 0-.548-.821 3.4 3.4 0 0 0-.867-.697 4 4 0 0 0-2.022-.515 4 4 0 0 0-2.02.515c-.45.257-.737.547-.868.697-.168.193-.383.46-.548.82s-.266.771-.307 1.261a12 12 0 0 0-.009 1.533c0 .014-.012.024-.026.018a4 4 0 0 0-.59-.19 1.2 1.2 0 0 0-.256-.027c-.375 0-.67.188-.791.505a.82.82 0 0 0 .039.69c.089.168.237.324.455.476.067.048.183.123.318.21.151.099.397.258.556.368a.3.3 0 0 1 .106.117c.023.055.027.097-.002.208a3 3 0 0 1-.39.798c-.19.29-.43.561-.709.809-.347.306-.76.577-1.224.802l-.077.04s-.278.142-.33.325c-.078.271.129.525.339.661.344.223.763.342 1.006.407q.102.027.185.052a.4.4 0 0 1 .16.093c.047.06.052.136.07.22.025.143.085.32.262.442.194.133.44.143.752.156.326.012.732.027 1.197.182.215.07.411.191.636.33.472.29 1.06.651 2.062.651 1.004 0 1.596-.362 2.07-.654.226-.137.419-.257.63-.326.465-.154.87-.17 1.197-.182.312-.012.558-.02.752-.156.19-.13.243-.325.268-.47.014-.072.023-.138.064-.19a.36.36 0 0 1 .154-.09q.085-.027.192-.055c.243-.065.548-.142.92-.351.446-.254.477-.565.43-.72Z"></path>
                                <path fill="#000" d="M19.168 15.242c-.1-.269-.288-.412-.502-.531a1 1 0 0 0-.108-.057l-.195-.099c-.667-.354-1.19-.801-1.55-1.33a3 3 0 0 1-.267-.472c-.03-.09-.03-.14-.007-.185a.3.3 0 0 1 .086-.089c.115-.076.233-.153.314-.204.143-.093.257-.167.329-.217.275-.191.466-.395.586-.623.17-.32.19-.688.06-1.032-.18-.478-.634-.775-1.18-.775q-.173 0-.344.038l-.089.02a10 10 0 0 0-.031-1.01c-.103-1.195-.521-1.82-.957-2.32a3.8 3.8 0 0 0-.974-.784A4.4 4.4 0 0 0 12.11 5c-.815 0-1.565.192-2.227.57a3.8 3.8 0 0 0-.975.785c-.436.499-.854 1.125-.957 2.32-.029.338-.036.685-.032 1.01l-.089-.20a1.6 1.6 0 0 0-.343-.038c-.547 0-1 .297-1.18.775-.13.344-.11.71.06 1.031.12.228.312.432.586.624.073.051.186.125.329.217.078.05.19.123.301.197a.3.3 0 0 1 .098.097c.023.047.023.098-.012.193-.058.13-.143.287-.262.462-.354.518-.861.957-1.507 1.307-.343.182-.698.303-.848.711-.114.308-.039.66.248.955q.14.152.364.275c.353.195.653.29.889.356a.6.6 0 0 1 .18.08c.105.092.09.23.23.434.084.126.182.212.262.268.293.202.624.215.973.229.316.012.674.026 1.082.16.17.056.346.165.549.29.489.301 1.16.712 2.28.712 1.122 0 1.795-.414 2.288-.715.203-.124.378-.232.542-.286.408-.135.766-.149 1.082-.161.35-.014.678-.027.973-.23.092-.063.208-.167.3-.326.1-.17.099-.291.193-.373a.6.6 0 0 1 .17-.077 4 4 0 0 0 .9-.36c.16-.087.284-.183.382-.292l.005-.004c.267-.292.336-.632.224-.934m-.996.535c-.608.336-1.012.3-1.326.501-.267.173-.11.543-.303.677-.239.165-.943-.011-1.852.288-.75.249-1.23.961-2.58.961-1.354 0-1.82-.71-2.58-.96-.91-.3-1.615-.124-1.853-.29-.193-.133-.036-.503-.303-.676-.313-.202-.718-.166-1.326-.501-.387-.214-.168-.346-.039-.408 2.203-1.065 2.553-2.712 2.57-2.836.019-.147.04-.264-.123-.415-.157-.146-.855-.578-1.048-.712-.321-.224-.461-.447-.357-.722.072-.19.25-.261.437-.261q.089 0 .175.019c.352.076.693.253.89.3q.042.01.073.01c.105 0 .141-.053.134-.174-.022-.385-.078-1.134-.016-1.836.083-.963.394-1.441.763-1.865.178-.202 1.011-1.083 2.604-1.083 1.597 0 2.426.88 2.604 1.083.369.423.68.9.763 1.865.061.702.009 1.451-.016 1.836-.009.126.03.174.134.174a.3.3 0 0 0 .073-.10c.197-.047.538-.224.89-.3a1 1 0 0 1 .175-.02c.187 0 .365.073.437.262.104.275-.037.498-.357.722-.193.134-.891.566-1.048.712-.163.15-.142.267-.122.415.015.124.366 1.77 2.569 2.836.125.062.345.194-.042.408"></path>
                            </svg>
                        </a>
                        <div class="share-platform-label">Snapchat</div>
                    </div>
                    
                    <div class="share-platform">
                        <a class="share-platform-icon" href="#" target="_blank" id="emailShare">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="12" fill="#60696C"></circle>
                                <path d="M24.154 26.568a.5.5 0 0 0 .692 0l1.416-1.354 5.192 4.976a.5.5 0 0 0 .692-.722l-5.16-4.946 5.228-4.997a.5.5 0 0 0-.691-.723l-5.582 5.336-.048.045-1.393 1.332-1.386-1.325-.062-.059-5.575-5.329a.5.5 0 1 0-.691.723l5.229 4.998-5.162 4.947a.5.5 0 1 0 .695.721l5.19-4.976z" fill="#fff"></path>
                                <path d="M35 29.318a3.683 3.683 0 0 1-3.679 3.68H17.679A3.683 3.683 0 0 1 14 29.317v-9.642a3.683 3.683 0 0 1 3.679-3.679h13.642A3.683 3.683 0 0 1 35 19.677zm-17.321-12.32A2.68 2.68 0 0 0 15 19.675v9.642a2.68 2.68 0 0 0 2.679 2.68h13.642A2.68 2.68 0 0 0 34 29.317v-9.642a2.68 2.68 0 0 0-2.679-2.679z" fill="#fff"></path>
                            </svg>
                        </a>
                        <div class="share-platform-label">Email</div>
                    </div>
                    
                    <div class="share-platform">
                        <div class="share-platform-icon" onclick="showMoreOptions()">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="12" fill="#E0E2D9"></circle>
                                <path d="M12 8a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 5.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 5.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" fill="#000"></path>
                            </svg>
                        </div>
                        <div class="share-platform-label">More</div>
                    </div>
                </div>
                
                <div class="scroll-button right" onclick="scrollPlatforms(1)">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M6 12L10 8L6 4" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            
            <div style="padding: 20px; border-top: 1px solid #eee;">
                <h3 style="font-size: 16px; font-weight: 600; margin-bottom: 10px;">Bergabung dengan pubg_battlegrounds di Linktree</h3>
                <p style="font-size: 14px; color: #666; margin-bottom: 15px;">Dapatkan Linktree gratis Anda sendiri. Satu-satunya tautan bio yang dipercaya oleh lebih dari 50 juta orang.</p>
                
                <div style="display: flex; flex-direction: column; gap: 10px;">
                    <button style="background: black; color: white; border: none; padding: 12px; border-radius: 8px; font-weight: 600;">Daftar gratis</button>
                    <button style="background: white; color: black; border: 1px solid #ddd; padding: 12px; border-radius: 8px; font-weight: 600;">Cari tahu lebih lanjut</button>
                </div>
            </div>
            
            <div style="display: flex; border-top: 1px solid #eee;">
                <a href="https://linktr.ee/s/about/trust-center/report?field86145911=https%3A%2F%2Flinktr.ee%2Fpubg_battlegrounds&field155172010=https%3A%2F%2Fsupport.pubg.com%2Fhc%2Fen-us" target="_blank" rel="noopener noreferrer" style="flex: 1; text-align: center; padding: 15px; color: #666; font-weight: 600; display: flex; align-items: center; justify-content: center; gap: 5px;">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path fill-rule="evenodd" d="M2 0v16h1V9h11.5l.38-.82L12.16 5l2.72-3.17L14.5 1H3V0H2Zm1 2v6h10.41l-2.29-2.67v-.65L13.42 2H3Z" fill="currentColor"></path>
                    </svg>
                    Report Linktree
                </a>
                <a href="https://linktr.ee/privacy" target="_blank" rel="noopener noreferrer" style="flex: 1; text-align: center; padding: 15px; color: #666; font-weight: 600; display: flex; align-items: center; justify-content: center; gap: 5px;">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path fill="currentColor" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1ZM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8Zm8.5-1v5h-1V7h1ZM7 5a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"></path>
                    </svg>
                    Privacy notice
                </a>
            </div>
        </div>
    </div>

    
    <div id="profileShareModal" class="share-modal">
        <div class="share-modal-content">
            <div style="padding: 15px; position: relative;">
                <div style="display: flex; justify-content: center; align-items: center;">
                    <h5 style="font-weight: 600;">Share link</h5>
                </div>
                <button onclick="closeProfileShareModal()" style="position: absolute; right: 15px; top: 15px; background: none; border: none; cursor: pointer;">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M13.354 3.354 13.707 3 13 2.293l-.354.353zM2.647 12.647 2.293 13l.707.707.354-.353zm.707-10L3 2.292 2.293 3l.354.354zm9.293 10.707.353.353.707-.707-.353-.354zm0-10.708-10 10 .707.708 10-10zm-10 .708 10 10 .707-.707-10-10z" fill="currentColor"></path>
                    </svg>
                </button>
            </div>
            
            <div class="share-preview" onclick="window.open('https://linktr.ee/pubg_battlegrounds', '_blank')">
                <img src="https://linktr.ee/og/image/pubg_battlegrounds.jpg" alt="PUBG Profile">
                <h3 style="font-weight: 800; font-size: 20px; color: white;">PUBG</h3>
                <p style="color: #ddd; font-size: 14px;">/pubg_battlegrounds</p>
            </div>
            
            <div class="share-platforms-container">
                <div class="scroll-button left" onclick="scrollProfilePlatforms(-1)">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                
                <div class="share-platforms" id="profileSharePlatforms">
                    <div class="share-platform">
                        <div class="share-platform-icon" onclick="copyProfileToClipboard()">
                            <svg viewBox="0 0 24 24">
                                <path d="m23.863 18.214-.422.489-.757-.654.434-.503.025-.027a5.19 5.19 0 1 1 7.337 7.34l-.025.023-.5.435-.657-.755.487-.423a4.19 4.19 0 0 0-5.922-5.925m3.654 2.975-.354.354-5.626 5.626-.353.353-.708-.707.354-.353 5.626-5.627.354-.353zm-8.81 2.25-.481.425a4.16 4.16 0 0 0 .01 5.91 4.25 4.25 0 0 0 5.953.026l.349-.47.802.597-.372.5-.05.058a5.25 5.25 0 0 1-7.385 0 5.16 5.16 0 0 1 0-7.342l.02-.02.491-.433z" fill="#000"></path>
                            </svg>
                        </div>
                        <div class="share-platform-label">Copy link</div>
                    </div>
                    
                    <div class="share-platform">
                        <a class="share-platform-icon" href="https://x.com/intent/post?text=Official%20Website%20-%20https%3A%2F%2Ftr.ee%2FaMqa7j_wol" target="_blank">
                            <svg viewBox="0 0 24 24">
                                <path d="M11.559 12.251L20.825 25.1736L11.5 35.6775H13.6L21.763 26.4794L28.359 35.6786H35.5L25.712 22.029L34.392 12.25H32.293L24.775 20.7211L18.7 12.251H11.559ZM14.645 13.8625H17.925L32.413 34.0661H29.133L14.644 13.8635L14.645 13.8625Z" fill="#000"></path>
                            </svg>
                        </a>
                        <div class="share-platform-label">X</div>
                    </div>
                    
                    <div class="share-platform">
                        <a class="share-platform-icon" href="https://www.facebook.com/sharer.php?u=https://tr.ee/aMqa7j_wol" target="_blank">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="12" fill="#1877F2"></circle>
                                <path d="M18 12a6 6 0 1 0-12 0 6 6 0 0 0 5.063 5.928v-4.193H9.539V12h1.524v-1.322c0-1.503.895-2.334 2.266-2.334.656 0 1.343.117 1.343.117v1.477h-.757c-.745 0-.977.463-.977.937V12h1.664l-.267 1.735h-1.398v4.193A6 6 0 0 0 18 12" fill="#fff"></path>
                            </svg>
                        </a>
                        <div class="share-platform-label">Facebook</div>
                    </div>
                    
                    <div class="share-platform">
                        <a class="share-platform-icon" href="https://api.whatsapp.com/send/?text=Official+Website+-+https%3A%2F%2Ftr.ee%2FaMqa7j_wol&type=custom_url&app_absent=0" target="_blank">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="12" fill="#00E676"></circle>
                                <path d="M16.201 7.746a5.9 5.9 0 0 0-4.205-1.745c-3.276 0-5.945 2.669-5.948 5.945 0 1.049.274 2.07.793 2.973L6 18.001l3.153-.826a5.95 5.95 0 0 0 2.843.724h.003c3.275 0 5.944-2.669 5.947-5.948A5.92 5.92 0 0 0 16.2 7.746m-4.205 9.146c-.89 0-1.76-.24-2.518-.69l-.18-.108-1.87.49.5-1.824-.118-.188a4.9 4.9 0 0 1-.755-2.63 4.95 4.95 0 0 1 4.944-4.937c1.32 0 2.56.516 3.495 1.448a4.92 4.92 0 0 1 1.445 3.496 4.95 4.95 0 0 1-4.943 4.943m2.711-3.7a27 27 0 0 0-1.015-.485c-.137-.049-.236-.074-.334.074-.1.148-.384.485-.47.582-.085.1-.174.11-.322.037s-.627-.231-1.195-.739a4.5 4.5 0 0 1-.827-1.029c-.085-.148-.008-.228.066-.302.066-.066.148-.174.223-.26.074-.085.1-.148.148-.248s.025-.185-.012-.259-.333-.807-.459-1.103c-.12-.291-.242-.251-.333-.254C10.09 9.2 9.99 9.2 9.892 9.2c-.1 0-.26.037-.397.185-.136.149-.519.508-.519 1.24 0 .733.534 1.438.608 1.537.074.1 1.046 1.6 2.537 2.244.354.154.63.245.847.314.356.114.678.097.935.06.285-.043.878-.36 1.004-.707.122-.348.122-.645.085-.707-.037-.063-.137-.1-.285-.174" fill="#fff"></path>
                            </svg>
                        </a>
                        <div class="share-platform-label">WhatsApp</div>
                    </div>
                    
                    <div class="share-platform">
                        <a class="share-platform-icon" href="https://www.linkedin.com/feed/?shareActive=true&shareUrl=https%3A%2F%2Ftr.ee%2FaMqa7j_wol" target="_blank">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="12" fill="#0A66C2"></circle>
                                <path d="M8.656 10.132h-2.46V18h2.46zm.221-2.705A1.417 1.417 0 0 0 7.47 6h-.044a1.426 1.426 0 0 0 0 2.852A1.416 1.416 0 0 0 8.877 7.47zM18 13.22c0-2.365-1.505-3.285-3-3.285a2.8 2.8 0 0 0-2.488 1.269h-.07v-1.072h-2.31V18h2.458v-4.186a1.633 1.633 0 0 1 1.476-1.76h.093c.782 0 1.362.492 1.362 1.731V18h2.46z" fill="#fff"></path>
                            </svg>
                        </a>
                        <div class="share-platform-label">LinkedIn</div>
                    </div>
                    
                    <div class="share-platform">
                        <a class="share-platform-icon" href="https://www.messenger.com/login.php?next=https%3A%2F%2Fwww.messenger.com%2Fnew" target="_blank">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="12" fill="#F1F1F1"></circle>
                                <path d="M12 6.002c-3.38 0-6 2.476-6 5.82 0 1.75.717 3.26 1.884 4.305a.48.48 0 0 1 .162.342l.032 1.067a.48.48 0 0 0 .674.424l1.19-.525a.48.48 0 0 1 .321-.024c.547.15 1.13.23 1.737.23 3.38 0 6-2.475 6-5.82 0-3.343-2.62-5.82-6-5.82" fill="url(#paint0_radial_657_559)"></path>
                                <path d="m8.397 13.524 1.762-2.796a.9.9 0 0 1 1.302-.24l1.402 1.05a.36.36 0 0 0 .433 0L15.19 10.1c.252-.192.582.11.413.379l-1.763 2.796a.9.9 0 0 1-1.301.24l-1.402-1.051a.36.36 0 0 0-.434.001L8.81 13.903c-.252.191-.582-.11-.413-.38" fill="#fff"></path>
                                <defs>
                                    <radialGradient id="paint0_radial_657_559" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(8.3 17.9) scale(13 13)">
                                        <stop stop-color="#0099FF"></stop>
                                        <stop offset="0.6" stop-color="#A033FF"></stop>
                                        <stop offset="0.93" stop-color="#FF5280"></stop>
                                        <stop offset="1" stop-color="#FF7061"></stop>
                                    </radialGradient>
                                </defs>
                            </svg>
                        </a>
                        <div class="share-platform-label">Messenger</div>
                    </div>
                    
                    <div class="share-platform">
                        <a class="share-platform-icon" href="https://www.snapchat.com/scan?attachmentUrl=https%3A%2F%2Fpubg.com%2Fen" target="_blank">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="12" fill="#FFFC00"></circle>
                                <path fill="#fff" d="M18.78 15.392c-.058-.193-.337-.329-.337-.329l-.07-.036a5.4 5.4 0 0 1-1.224-.802 4.2 4.2 0 0 1-.71-.809 3 3 0 0 1-.391-.806c-.026-.104-.022-.146 0-.2a.3.3 0 0 1 .097-.11c.157-.111.41-.275.565-.375.135-.087.25-.162.318-.21.218-.152.368-.308.456-.476a.82.82 0 0 0 .039-.69c-.12-.317-.416-.505-.792-.505q-.126 0-.255.027c-.216.047-.42.124-.59.19a.018.018 0 0 1-.026-.018c.019-.423.04-.992-.008-1.533a3.8 3.8 0 0 0-.307-1.26 3.4 3.4 0 0 0-.548-.821 3.4 3.4 0 0 0-.867-.697 4 4 0 0 0-2.022-.515 4 4 0 0 0-2.02.515c-.45.257-.737.547-.868.697-.168.193-.383.46-.548.82s-.266.771-.307 1.261a12 12 0 0 0-.009 1.533c0 .014-.012.024-.026.018a4 4 0 0 0-.59-.19 1.2 1.2 0 0 0-.256-.027c-.375 0-.67.188-.791.505a.82.82 0 0 0 .039.69c.089.168.237.324.455.476.067.048.183.123.318.21.151.099.397.258.556.368a.3.3 0 0 1 .106.117c.023.055.027.097-.002.208a3 3 0 0 1-.39.798c-.19.29-.43.561-.709.809-.347.306-.76.577-1.224.802l-.077.04s-.278.142-.33.325c-.078.271.129.525.339.661.344.223.763.342 1.006.407q.102.027.185.052a.4.4 0 0 1 .16.093c.047.06.052.136.07.22.025.143.085.32.262.442.194.133.44.143.752.156.326.012.732.027 1.197.182.215.07.411.191.636.33.472.29 1.06.651 2.062.651 1.004 0 1.596-.362 2.07-.654.226-.137.419-.257.63-.326.465-.154.87-.17 1.197-.182.312-.012.558-.02.752-.156.19-.13.243-.325.268-.47.014-.072.023-.138.064-.19a.36.36 0 0 1 .154-.09q.085-.027.192-.055c.243-.065.548-.142.92-.351.446-.254.477-.565.43-.72Z"></path>
                                <path fill="#000" d="M19.168 15.242c-.1-.269-.288-.412-.502-.531a1 1 0 0 0-.108-.057l-.195-.099c-.667-.354-1.19-.801-1.55-1.33a3 3 0 0 1-.267-.472c-.03-.09-.03-.14-.007-.185a.3.3 0 0 1 .086-.089c.115-.076.233-.153.314-.204.143-.093.257-.167.329-.217.275-.191.466-.395.586-.623.17-.32.19-.688.06-1.032-.18-.478-.634-.775-1.18-.775q-.173 0-.344.038l-.089.02a10 10 0 0 0-.031-1.01c-.103-1.195-.521-1.82-.957-2.32a3.8 3.8 0 0 0-.974-.784A4.4 4.4 0 0 0 12.11 5c-.815 0-1.565.192-2.227.57a3.8 3.8 0 0 0-.975.785c-.436.499-.854 1.125-.957 2.32-.029.338-.036.685-.032 1.01l-.089-.20a1.6 1.6 0 0 0-.343-.038c-.547 0-1 .297-1.18.775-.13.344-.11.71.06 1.031.12.228.312.432.586.624.073.051.186.125.329.217.078.05.19.123.301.197a.3.3 0 0 1 .098.097c.023.047.023.098-.012.193-.058.13-.143.287-.262.462-.354.518-.861.957-1.507 1.307-.343.182-.698.303-.848.711-.114.308-.039.66.248.955q.14.152.364.275c.353.195.653.29.889.356a.6.6 0 0 1 .18.08c.105.092.09.23.23.434.084.126.182.212.262.268.293.202.624.215.973.229.316.012.674.026 1.082.16.17.056.346.165.549.29.489.301 1.16.712 2.28.712 1.122 0 1.795-.414 2.288-.715.203-.124.378-.232.542-.286.408-.135.766-.149 1.082-.161.35-.014.678-.027.973-.23.092-.063.208-.167.3-.326.1-.17.099-.291.193-.373a.6.6 0 0 1 .17-.077 4 4 0 0 0 .9-.36c.16-.087.284-.183.382-.292l.005-.004c.267-.292.336-.632.224-.934m-.996.535c-.608.336-1.012.3-1.326.501-.267.173-.11.543-.303.677-.239.165-.943-.011-1.852.288-.75.249-1.23.961-2.58.961-1.354 0-1.82-.71-2.58-.96-.91-.3-1.615-.124-1.853-.29-.193-.133-.036-.503-.303-.676-.313-.202-.718-.166-1.326-.501-.387-.214-.168-.346-.039-.408 2.203-1.065 2.553-2.712 2.57-2.836.019-.147.04-.264-.123-.415-.157-.146-.855-.578-1.048-.712-.321-.224-.461-.447-.357-.722.072-.19.25-.261.437-.261q.089 0 .175.019c.352.076.693.253.89.3q.042.01.073.01c.105 0 .141-.053.134-.174-.022-.385-.078-1.134-.016-1.836.083-.963.394-1.441.763-1.865.178-.202 1.011-1.083 2.604-1.083 1.597 0 2.426.88 2.604 1.083.369.423.68.9.763 1.865.061.702.009 1.451-.016 1.836-.009.126.03.174.134.174a.3.3 0 0 0 .073-.10c.197-.047.538-.224.89-.3a1 1 0 0 1 .175-.02c.187 0 .365.073.437.262.104.275-.037.498-.357.722-.193.134-.891.566-1.048.712-.163.15-.142.267-.122.415.015.124.366 1.77 2.569 2.836.125.062.345.194-.042.408"></path>
                            </svg>
                        </a>
                        <div class="share-platform-label">Snapchat</div>
                    </div>
                    
                    <div class="share-platform">
                        <a class="share-platform-icon" href="#" target="_blank" id="profileEmailShare">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="12" fill="#60696C"></circle>
                                <path d="M24.154 26.568a.5.5 0 0 0 .692 0l1.416-1.354 5.192 4.976a.5.5 0 0 0 .692-.722l-5.16-4.946 5.228-4.997a.5.5 0 0 0-.691-.723l-5.582 5.336-.048.045-1.393 1.332-1.386-1.325-.062-.059-5.575-5.329a.5.5 0 1 0-.691.723l5.229 4.998-5.162 4.947a.5.5 0 1 0 .695.721l5.19-4.976z" fill="#fff"></path>
                                <path d="M35 29.318a3.683 3.683 0 0 1-3.679 3.68H17.679A3.683 3.683 0 0 1 14 29.317v-9.642a3.683 3.683 0 0 1 3.679-3.679h13.642A3.683 3.683 0 0 1 35 19.677zm-17.321-12.32A2.68 2.68 0 0 0 15 19.675v9.642a2.68 2.68 0 0 0 2.679 2.68h13.642A2.68 2.68 0 0 0 34 29.317v-9.642a2.68 2.68 0 0 0-2.679-2.679z" fill="#fff"></path>
                            </svg>
                        </a>
                        <div class="share-platform-label">Email</div>
                    </div>
                    
                    <div class="share-platform">
                        <div class="share-platform-icon" onclick="showProfileMoreOptions()">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="12" fill="#E0E2D9"></circle>
                                <path d="M12 8a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 5.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 5.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" fill="#000"></path>
                            </svg>
                        </div>
                        <div class="share-platform-label">More</div>
                    </div>
                </div>
                
                <div class="scroll-button right" onclick="scrollProfilePlatforms(1)">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M6 12L10 8L6 4" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            
            <div style="padding: 20px; border-top: 1px solid #eee;">
                <h3 style="font-size: 16px; font-weight: 600; margin-bottom: 10px;">Bergabung dengan pubg_battlegrounds di Linktree</h3>
                <p style="font-size: 14px; color: #666; margin-bottom: 15px;">Dapatkan Linktree gratis Anda sendiri. Satu-satunya tautan bio yang dipercaya oleh lebih dari 50 juta orang.</p>
                
                <div style="display: flex; flex-direction: column; gap: 10px;">
                    <button style="background: black; color: white; border: none; padding: 12px; border-radius: 8px; font-weight: 600;">Daftar gratis</button>
                    <button style="background: white; color: black; border: 1px solid #ddd; padding: 12px; border-radius: 8px; font-weight: 600;">Cari tahu lebih lanjut</button>
                </div>
            </div>
            
            <div style="display: flex; border-top: 1px solid #eee;">
                <a href="https://linktr.ee/s/about/trust-center/report?field86145911=https%3A%2F%2Flinktr.ee%2Fpubg_battlegrounds&field155172010=https%3A%2F%2Fsupport.pubg.com%2Fhc%2Fen-us" target="_blank" rel="noopener noreferrer" style="flex: 1; text-align: center; padding: 15px; color: #666; font-weight: 600; display: flex; align-items: center; justify-content: center; gap: 5px;">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path fill-rule="evenodd" d="M2 0v16h1V9h11.5l.38-.82L12.16 5l2.72-3.17L14.5 1H3V0H2Zm1 2v6h10.41l-2.29-2.67v-.65L13.42 2H3Z" fill="currentColor"></path>
                    </svg>
                    Report Linktree
                </a>
                <a href="https://linktr.ee/privacy" target="_blank" rel="noopener noreferrer" style="flex: 1; text-align: center; padding: 15px; color: #666; font-weight: 600; display: flex; align-items: center; justify-content: center; gap: 5px;">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path fill="currentColor" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1ZM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8Zm8.5-1v5h-1V7h1ZM7 5a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"></path>
                    </svg>
                    Privacy notice
                </a>
            </div>
        </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        let currentLink = '';
        let currentTitle = '';
        
        function openShareModal(title, url, imageUrl, description, urlText, extraDescription) {
   
    event.preventDefault();
    event.stopPropagation();

    
    document.getElementById('modalTitle').textContent = title;
    document.getElementById('modalImage').src = imageUrl;
    document.getElementById('modalDesc').textContent = description || '';
    document.getElementById('modalUrl').textContent = urlText || url;
    document.getElementById('modalExtraDesc').textContent = extraDescription || '';

    
    const encodedText = encodeURIComponent(`${title} - ${url}`);
    const encodedUrl = encodeURIComponent(url);
    
    document.getElementById('twitterShare').href = `https://x.com/intent/post?text=${encodedText}`;
    document.getElementById('facebookShare').href = `https://www.facebook.com/sharer.php?u=${encodedUrl}`;
    document.getElementById('whatsappShare').href = `https://api.whatsapp.com/send/?text=${encodedText}&type=custom_url&app_absent=0`;
    document.getElementById('linkedinShare').href = `https://www.linkedin.com/sharing/share-offsite/?url=${encodedUrl}`;
    document.getElementById('messengerShare').href = `https://www.messenger.com/login.php?next=https%3A%2F%2Fwww.messenger.com%2Fnew`;
    document.getElementById('snapchatShare').href = `https://www.snapchat.com/scan?attachmentUrl=${encodedUrl}`;
    document.getElementById('emailShare').href = `mailto:?subject=${encodeURIComponent(title)}&body=${encodedText}`;

    

    
    const preview = document.getElementById('sharePreviewClickable');
    preview.onclick = function(e) {
        e.preventDefault();
        window.open(url, '_blank');
    };

    
    document.getElementById('shareModal').style.display = 'flex';
}
        
        function openProfileShareModal() {
            document.getElementById('profileShareModal').style.display = 'flex';
        }
        
        function closeShareModal() {
            document.getElementById('shareModal').style.display = 'none';
        }
        
        function closeProfileShareModal() {
            document.getElementById('profileShareModal').style.display = 'none';
        }
        
        function copyToClipboard() {
            navigator.clipboard.writeText(currentLink).then(() => {
                alert('Link copied to clipboard!');
            });
        }
        
        function copyProfileToClipboard() {
            navigator.clipboard.writeText('https://linktr.ee/pubg_battlegrounds').then(() => {
                alert('Profile link copied to clipboard!');
            });
        }
        
        function scrollPlatforms(direction) {
            const container = document.getElementById('sharePlatforms');
            container.scrollBy({ left: direction * 200, behavior: 'smooth' });
        }
        
        function scrollProfilePlatforms(direction) {
            const container = document.getElementById('profileSharePlatforms');
            container.scrollBy({ left: direction * 200, behavior: 'smooth' });
        }
        
        function showMoreOptions() {
            alert('More sharing options would appear here');
        }
        
        function showProfileMoreOptions() {
            alert('More profile sharing options would appear here');
        }
        
        
        window.onclick = function(event) {
            if (event.target == document.getElementById('shareModal')) {
                closeShareModal();
            }
            if (event.target == document.getElementById('profileShareModal')) {
                closeProfileShareModal();
            }
        }

        
    </script>
    
<div style="text-align: left; margin-top: 40px; margin-bottom: 5px; padding-left: 15px;">
    <button id="ot-sdk-btn" 
            style="background: none; 
                   border: none; 
                   color: #666; 
                   font-family: 'IBM Plex Sans', sans-serif; 
                   font-size: 12px; 
                   cursor: pointer; 
                   padding: 5px 0; 
                   text-decoration: none;
                   transition: color 0.2s ease;"
            onmouseover="this.style.color='#333'" 
            onmouseout="this.style.color='#666'">
        Cookie Preferences
    </button>
</div>
</body>
</html>