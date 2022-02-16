/*
uso de condicionales
*/
import java.util.Scanner;   
public class Semana
{
    public static void main(String[] args) {
        int dia;
        String nombreDia;
        Scanner dato=new Scanner(System.in);
        System.out.println("DIAS DE LA SEMANA");
        System.out.println("*****************");
        System.out.print("Ingrese un numero:");
        dia=dato.nextInt();

        //utilamos la estructura IF
        if(dia==1)
        {
            System.out.println("Domingo");
        }
        else if (dia==2){
            System.out.println("Lunes");
        }
        else if (dia==3){
            System.out.println("Martes");
        }
        else if (dia==4){
            System.out.println("Miercoles");
        }
        else if (dia==5){
            System.out.println("Jueves");
        }
        else if (dia==6){
            System.out.println("Viernes");
        }
        else if (dia==7){
            System.out.println("Sabado");
        }
        else{
            System.out.println("Numero no valido");
        }
    }    

}