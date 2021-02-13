import java.util.*; 

public class median{
     public static double cekMedian(int a[], int n) 
    { 
        // First we sort the array 
        Arrays.sort(a); 
  
        // check for even case 
        if (n % 2 != 0) 
            return (double)a[n / 2]; 
  
        return (double)(a[(n - 1) / 2] + a[n / 2]) / 2.0; 
    } 


    public static void main(String[] args){
        int a[] = { 0, 1, 2, 4, 6, 5, 3 }; 
        int n = a.length; 
        System.out.println(Arrays.toString(a));
        System.out.println("Median = " + cekMedian(a, n)); 

    }

   
}