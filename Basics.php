public class Basics{
    
    public static void main(String[]args){

        //Print 1 to 20
        int i;
        for(i=1;i<=20;i++){

            System.out.print(i);

        }

        // Print even numbers from 1–50
        int a;

        for(a=2;a<=50;a=a+2){
            System.out.print(a);
        }

        //Print reverse 10 to 1
        int b;
        for(b=10;b>=1;b--){
            System.out.print(b);
        }

        //Print table of 7
        int c;
        for(c=1;c<=10;c++){
           int d = 7*c;
            System.out.print(d);
        }

        //Print sum of 1 to 10
        int e=0;
        for(int f=1;f<=10;e++){     // 1+2+3+4+5+6+7+8+9+10=55  
            e=e+f;
            System.out.println(e);           
        }
 
        //Sum of 1 to 20
        int g = 0;
        for(int h=1;h<=20; h++){
            g=g+h;
            System.out.println(g);               
        }

    }
}
