Webcam.set(
    {
        width:978,
        height:550,
        image_format:'jpeg',
        jpeg_quality:100
    });
    Webcam.attach('#webcam');
    


    Promise.all([faceapi.nets.faceRecognitionNet.loadFromUri('/Atom/weights'),
    faceapi.nets.faceLandmark68Net.loadFromUri('/Atom/weights'),
    faceapi.nets.ssdMobilenetv1.loadFromUri('/Atom/weights')
    ]);


    
    async function scan()
    {

        var image="";
        var image1="";
        var image2="";
        Webcam.snap( function(data_uri)
            {
                image=data_uri;
                document.getElementById("image1").src=image;
            });
            image1=document.querySelector("#image1");
            image2=document.querySelector("#image2");
            
            const distance = await matchFaces(image1, image2);
            console.log('Euclidean distance:', distance);


            
            if(distance>0.45)
            {
                swal("USER NOT FOUND","");   
            }
            else{
                swal("ATTENDENCE MARKED","");
                document.location="markattendence.html";
            }            
    }
        async function matchFaces(img1, img2) {
        // Detect faces and landmarks for both images
        const [detections1, detections2] = await Promise.all([
        faceapi.detectAllFaces(img1).withFaceLandmarks().withFaceDescriptors(),
        faceapi.detectAllFaces(img2).withFaceLandmarks().withFaceDescriptors()
        ]);
        // Compute face descriptors for both faces
        const faceDescriptor1 = detections1[0].descriptor;
        localStorage.setItem("face1",faceDescriptor1);
        if(faceDescriptor1==null)
        {
            swal("CAN'T DETECT FACE",""); 
        }
        const faceDescriptor2 = detections2[0].descriptor;
        // Compute Euclidean distance between face descriptors
        const distance = faceapi.euclideanDistance(faceDescriptor1, faceDescriptor2);
        return distance;
        }


